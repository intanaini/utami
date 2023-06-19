<?php

namespace App\Http\Controllers;

use App\Models\pembayaran_menu;
use Illuminate\Http\Request;
use Midtrans\Snap;

class Pembayaran extends Controller
{
    // public function index()
    // {
    //     return view('payment');
    // }

    // public function process(Request $request)
    // {
    //     // Mengisi data pembayaran
    //     $transactionDetails = [
    //         'order_id' => 'ORDER-' . uniqid(),
    //         'gross_amount' => $request->input('amount'),
    //     ];

    //     // Melakukan pembayaran dengan Midtrans Snap
    //     $snapToken = Snap::getSnapToken($transactionDetails);

    //     // Mengarahkan pengguna ke halaman pembayaran Midtrans
    //     return redirect()->away(Snap::getSnapRedirectUrl($snapToken));
    // }
}


