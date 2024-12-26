<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TransactionController extends Controller
{
    public function create(Request $request, $course_id)
    {
        $course = Course::findOrFail($course_id);

        $transaction = Transaction::create([
            'id' => Str::uuid(),
            'purchase_code' => 'TRX-' . strtoupper(Str::random(10)),
            'name' => $request->name,
            'email' => $request->email,
            'courses_id' => $course->id,
            'price' => $course->price,
            'status' => 'PENDING',
        ]);

        return redirect()->route('transactions.show', $transaction->id);
    }

    public function show($id)
    {
        $transaction = Transaction::with('course')->findOrFail($id);
        return view('transactions.show', compact('transaction'));
    }
    public function simulatePayment($id)
    {
        $transaction = Transaction::findOrFail($id);
        $transaction->update(['status' => 'SUCCESS']);
        return redirect()->route('transactions.show', $transaction->id)->with('success', 'Payment successful!');
    }
    public function store(Request $request)
{
    $validated = $request->validate([
        'purchase_code' => 'required|string',
        'name' => 'required|string',
        'email' => 'required|email',
        'courses_id' => 'required|uuid',
        'price' => 'required|numeric',
    ]);

    $transaction = Transaction::create($validated);

    // Proses ke Midtrans
    return $this->processPayment($transaction);
}

private function processPayment($transaction)
{
    \Midtrans\Config::$serverKey = config('midtrans.serverKey');
    \Midtrans\Config::$isProduction = false;
    \Midtrans\Config::$isSanitized = true;
    \Midtrans\Config::$is3ds = true;

    $params = [
        'transaction_details' => [
            'order_id' => $transaction->id,
            'gross_amount' => $transaction->price,
        ],
        'customer_details' => [
            'first_name' => $transaction->name,
            'email' => $transaction->email,
        ],
    ];

    try {
        $paymentUrl = \Midtrans\Snap::createTransaction($params)->redirect_url;
        return redirect($paymentUrl);
    } catch (\Exception $e) {
        return redirect()->back()->withErrors(['error' => $e->getMessage()]);
    }
}

    
}
