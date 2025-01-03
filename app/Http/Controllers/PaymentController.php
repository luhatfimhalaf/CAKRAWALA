<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Midtrans\Config;
use Midtrans\Snap;
use App\Models\Transaction;
use App\Models\Course;
use App\Models\User;
use App\Models\UserCourse; // Model yang menghubungkan user dan course

class PaymentController extends Controller
{
    public function payCourse($id)
    {
        $course = Course::findOrFail($id);
        return view('form-bayar', compact('course'));
    }

    public function createPayment(Request $request)
    {
        // Validasi input
        $request->validate([
            'course_id' => 'required|exists:courses,id',
            'name' => 'required|string',
            'email' => 'required|email',
            'amount' => 'required|numeric',
        ]);
        
        // Konfigurasi Midtrans
        Config::$serverKey = env('MIDTRANS_SERVER_KEY');
        Config::$isProduction = env('MIDTRANS_IS_PRODUCTION');
        Config::$isSanitized = true;
        Config::$is3ds = true;

        $orderId = 'ORDER-' . uniqid();

        // Data transaksi
        $transactionDetails = [
            'order_id' => $orderId,
            'gross_amount' => $request->amount,
        ];

        $customerDetails = [
            'first_name' => $request->name,
            'email' => $request->email,
        ];

        $params = [
            'transaction_details' => $transactionDetails,
            'customer_details' => $customerDetails,
        ];

        try {
            // Dapatkan token Snap
            $snapToken = Snap::getSnapToken($params);

            // Simpan transaksi ke database
            $transaction = Transaction::create([
                'course_id' => $request->course_id,
                'order_id' => $orderId,
                'name' => $request->name,
                'email' => $request->email,
                'amount' => $request->amount,
                'status' => 'pending',
            ]);

            return response()->json(['snap_token' => $snapToken]);
        } catch (\Exception $e) {
            // Log error jika terjadi kesalahan
            \Log::error('Midtrans Error: ' . $e->getMessage());
            return response()->json(['error' => $e->getMessage()]);
        }
    }

    // Callback function dari Midtrans
    public function handleMidtransCallback(Request $request)
    {
        // Log the request to verify incoming data
        \Log::info('Midtrans Callback Request:', $request->all());

        $serverKey = env('MIDTRANS_SERVER_KEY');
        $hashed = hash("sha512", $request->order_id . $request->status_code . $request->gross_amount . $serverKey);
        
        if ($hashed !== $request->signature_key) {
            \Log::error('Invalid Signature: ', ['hashed' => $hashed, 'signature_key' => $request->signature_key]);
            return response()->json(['message' => 'Invalid signature'], 403);
        }

        // Cari transaksi berdasarkan order_id
        $transaction = Transaction::where('order_id', $request->order_id)->first();

        if ($transaction) {
            \Log::info('Transaction Found:', ['transaction' => $transaction]);

            // Tentukan status berdasarkan transaction_status dari Midtrans
            if ($request->transaction_status == 'settlement') {
                $transaction->status = 'success';
                \Log::info('Transaction Status: success');
            } elseif ($request->transaction_status == 'pending') {
                $transaction->status = 'pending';
                \Log::info('Transaction Status: pending');
            } elseif (in_array($request->transaction_status, ['deny', 'expire', 'cancel'])) {
                $transaction->status = 'failed';
                \Log::info('Transaction Status: failed');
            }

            $transaction->save();

            // Tambahkan kursus ke user jika transaksi sukses
            if ($request->transaction_status == 'settlement') {
                $user = User::where('email', $transaction->email)->first();
                if ($user) {
                    // Pastikan kursus ditambahkan ke user jika belum ada
                    UserCourse::firstOrCreate([
                        'user_id' => $user->id,
                        'course_id' => $transaction->course_id,
                    ]);
                }
            }
        } else {
            \Log::error('Transaction Not Found for Order ID:', ['order_id' => $request->order_id]);
        }

        return response()->json(['message' => 'Transaction updated']);
    }

    public function myCourses()
    {
        // Ambil kursus yang dibeli oleh pengguna yang sedang login
        $user = auth()->user();
        
        // Periksa apakah relasi sudah ada di model User untuk courses()
        $courses = $user->courses()->get(); // Relasi antara User dan Course
    
        return view('my-courses', compact('courses'));
    }
}
