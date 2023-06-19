<?php

namespace App\Http\Controllers;

use App\Models\menu;
use App\Models\pemesanan_menu;
use App\Models\rincian_psn;
use Carbon\Carbon;
use Midtrans\Config;
use Midtrans\Snap;
use Illuminate\Http\Request;

class Pemesanan extends Controller
{

    public function cekpesanan()
    {
        return view('layouts.cekpesanan');

    }
    public function detailditempat()
    {
        return view('layouts.detailditempat');

    }

    public function detailreservasi()
    {
        return view('layouts.detailreservasi');

    }
    public function __construct(){
        // Set konfigurasi Midtrans
        // Config::$serverKey = env('MIDTRANS_SERVER_KEY');
        // Config::$isProduction = env('MIDTRANS_IS_PRODUCTION');
        Config::$serverKey = 'Mid-server-3UUdcZ0oVQrskso4a56Ey6IH';
        Config::$isProduction = true;
        Config::$isSanitized = true;
        Config::$is3ds = true;
    }
    //     public function pemesanan()
    //     {
    // return view('layouts.pemesanan');
    //   }

    public function pemesananmkn(Request $request)
    {
        // return $request;
        $menumkn = menu::where('status','Tersedia')->get();
        $no_meja = $request->query('no-meja');
        return view('layouts.pemesananmkn', ['makan' => $menumkn,'no_meja'=>$no_meja]);
        // return view('welcome',[ 'pesanan'=> $menumkn]);


    }

    public function insertpesan(Request $request)
    {
        $items = $request->input('items');
        // return $request;

    }


    // public function pemesananmnm()
    // {
    //     $menumakan = menu::all();
    //     return view('layouts.pemesananmnm', ['makan' => $menumakan]);
    // }

    public function pemesananreservasi()
    {

        $menumakan = menu::where('status','Tersedia')->get();
        return view('layouts.pemesananreservasi', ['makan' => $menumakan]);

    }
    public function create(Request $request)
    {
        $items = $request->input('items');
        $total = 0;
        $pesananan = new pemesanan_menu();
        // dd($request->input('nama_pelanggan'));


        $pesananan->nama_pelanggan = $request->input('nama_pelanggan');
        $pesananan->no_telepon = $request->input('no_telepon');
        $pesananan->waktu = $request->input('waktu');
        $pesananan->total_pesanan = $total;
        $pesananan->status_pesanan = 'Reservasi';
        $pesananan->total_pembayaran = $total;
        $pesananan->type_pesanan = 'Reservasi';
        $pesananan->catatan = $request->input('catatan');
        $pesananan->save();

        foreach ($items as $id => $quantity) {
            $price = menu::where('id', $id)->value('harga_menu');
            $subtotal = $price * $quantity;
            $total += $subtotal;

            $penjualan = new rincian_psn();
            $penjualan->id_menu  = $id;
            // $penjualan->barang_id = $id;
            $penjualan->id_pesanan  = $pesananan->id;
            $penjualan->qty = $quantity;
            $penjualan->total = $subtotal;

            $penjualan->save();
        }

        rincian_psn::where('qty', 0)->delete();
        $jumlah = rincian_psn::where('id_pesanan', $pesananan->id)->sum('total');
        $jumlah_psn = rincian_psn::where('id_pesanan', $pesananan->id)->sum('qty');

        $pesananan->update(['total_pembayaran' => $jumlah, 'total_pesanan' => $jumlah_psn]);

        // Ambil data dari form pembayaran
        $params = array(
            'transaction_details' => array(
                'order_id' => 'ID-'. $pesananan->id,
                'gross_amount' => $jumlah,
            ),
            // 'enabled_payments'=> array(
            //     'gopay',
            // )
        );

        // Buat transaksi baru menggunakan Midtrans Snap
        $snapToken = Snap::getSnapToken($params);

        return response()->json(['success' => true,
        'snapToken' => $snapToken
        ]);
    }

    public function create1(Request $request)
    {
        $items = $request->input('items');
        $total = 0;
        $pesananan = new pemesanan_menu();

        $pesananan->nama_pelanggan = $request->input('nama_pelanggan');
        // $pesananan->no_telepon = $request->input('no_telepon');
        // $pesananan->waktu = $request->input('waktu');
        $pesananan->no_meja = $request->input('no_meja');
        $pesananan->total_pesanan = $total;
        $pesananan->status_pesanan = 'Di Proses';
        $pesananan->total_pembayaran = $total;
        $pesananan->type_pesanan = 'Makan Ditempat';
        $pesananan->catatan = $request->input('catatan');
        $pesananan->save();

        foreach ($items as $id => $quantity) {
            $price = menu::where('id', $id)->value('harga_menu');
            $subtotal = $price * $quantity;
            $total += $subtotal;

            $penjualan = new rincian_psn();
            $penjualan->id_menu  = $id;
            // $penjualan->barang_id = $id;
            $penjualan->id_pesanan  = $pesananan->id;
            $penjualan->qty = $quantity;
            $penjualan->total = $subtotal;

            $penjualan->save();
        }

        rincian_psn::where('qty', 0)->delete();
        $jumlah = rincian_psn::where('id_pesanan', $pesananan->id)->sum('total');
        $jumlah_psn = rincian_psn::where('id_pesanan', $pesananan->id)->sum('qty');

        $pesananan->update(['total_pembayaran' => $jumlah, 'total_pesanan' => $jumlah_psn]);

        // Ambil data dari form pembayaran
        $params = array(
            'transaction_details' => array(
                'order_id' => 'ID-'. $pesananan->id,
                'gross_amount' => $jumlah,
            ),
            // 'enabled_payments'=> array(
            //     'gopay',
            // )
        );

        // Buat transaksi baru menggunakan Midtrans Snap
        $snapToken = Snap::getSnapToken($params);

        return response()->json(['success' => true,
        'snapToken' => $snapToken,
    ]);
    }




}
