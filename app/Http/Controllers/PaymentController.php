<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Midtrans\Config;
use Midtrans\Snap;
use App\Models\Transaction;
use App\Models\Course;

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
        \Log::info('Request Data:', $request->all());

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
        // Logging untuk memeriksa data $params
        \Log::info('Midtrans Params:', $params);

        try {
            // Dapatkan token Snap
            $snapToken = Snap::getSnapToken($params);

            // Simpan transaksi ke database
            Transaction::create([
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
}
