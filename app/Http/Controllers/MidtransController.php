<?php

namespace App\Http\Controllers;

use App\Models\pembayaran_menu;
use Illuminate\Http\Request;
use Midtrans\Config;
use Midtrans\Notification;
use Midtrans\Snap;

class MidtransController extends Controller
{
    public function callback(Request $request)
    {
        // Set konfigurasi Midtrans
        Config::$serverKey = env('MIDTRANS_SERVER_KEY');
        Config::$isProduction = env('MIDTRANS_IS_PRODUCTION');
        Config::$isSanitized = true;
        Config::$is3ds = true;

        // Buat instance class Midtrans Notification
        $notification = new Notification();

        // Cek status pembayaran dari Midtrans
        $transaction = $notification->transaction_status;

        // Lakukan tindakan sesuai dengan status pembayaran
        if ($transaction == 'capture') {
            // Proses pembayaran berhasil
            // Tambahkan logika bisnis Anda di sini
        } elseif ($transaction == 'settlement') {
            // Pembayaran telah diselesaikan
            // Tambahkan logika bisnis Anda di sini
        } elseif ($transaction == 'pending') {
            // Pembayaran masih dalam proses atau tertunda
            // Tambahkan logika bisnis Anda di sini
        } elseif ($transaction == 'deny') {
            // Pembayaran ditolak
            // Tambahkan logika bisnis Anda di sini
        } elseif ($transaction == 'expire') {
            // Pembayaran telah kadaluwarsa
            // Tambahkan logika bisnis Anda di sini
        } elseif ($transaction == 'cancel') {
            // Pembayaran dibatalkan
            // Tambahkan logika bisnis Anda di sini
        }

        // Kirim respons ke Midtrans agar tidak ada pemanggilan ulang
        return response()->json(['status' => 'success']);
    }

    public function charge(Request $request)
    {
        // Set konfigurasi Midtrans
        Config::$serverKey = env('MIDTRANS_SERVER_KEY');
        Config::$isProduction = env('MIDTRANS_IS_PRODUCTION');
        Config::$isSanitized = true;
        Config::$is3ds = true;

        // Ambil data dari form pembayaran
        $params = array(
            'transaction_details' => array(
                'order_id' => $request->input('transaction_details.order_id'),
                'gross_amount' => $request->input('transaction_details.gross_amount'),
            ),
        );

        // Buat transaksi baru menggunakan Midtrans Snap
        $snapToken = Snap::getSnapToken($params);

        // Redirect ke halaman pembayaran Midtrans
        return redirect()->away(Snap::getRedirectUrl($snapToken));
    }
    
    public function success(Request $request)
    {
        // Tambahkan logika bisnis Anda di sini untuk halaman sukses
        return view('success');
    }

    public function failure(Request $request)
    {
        // Tambahkan logika bisnis Anda di sini untuk halaman gagal
        return view('failure');
    }


    public function index(Request $request)
    {

        if ($request->amount) {
            // Set your Merchant Server Key
            \Midtrans\Config::$serverKey = 'SB-Mid-server-606HHKfnHuHsReHykkeOrD3L';
            // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
            \Midtrans\Config::$isProduction = false;
            // Set sanitization on (default)
            \Midtrans\Config::$isSanitized = true;
            // Set 3DS transaction for credit card to true
            \Midtrans\Config::$is3ds = true;
            # code...
            $transactionDetails =  array(
                'transaction_details' => array(
                    'order_id' => rand(),
                    'gross_amount' => $request->amount,
                ),
                'customer_details' => array(
                    'first_name' => 'budi',
                    'last_name' => 'pratama',
                    'email' => 'budi.pra@example.com',
                    'phone' => '08111222333',
                ),
            );

            // Melakukan pembayaran dengan Midtrans Snap
            $snapToken = Snap::getSnapToken($transactionDetails);
        } else {
            $snapToken = null;
        }


        return view('coba-mid', compact(['snapToken']));
    }

    public function process(Request $request)
    {
        $transactionDetails = [
            'order_id' => 'ORDER-' . uniqid(),
            'gross_amount' => $request->input('amount'),
        ];

        // Melakukan pembayaran dengan Midtrans Snap
        $snapToken = Snap::getSnapToken($transactionDetails);

        // Mengarahkan pengguna ke halaman pembayaran Midtrans
        // return redirect()->back();
        // return redirect()->away(Snap::getSnapRedirectUrl($snapToken));
    }
}
