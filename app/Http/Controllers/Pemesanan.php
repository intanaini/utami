<?php

namespace App\Http\Controllers;

use App\Models\menu;
use App\Models\pemesanan_menu;
use App\Models\rincian_psn;
use Carbon\Carbon;
use Illuminate\Http\Request;

class Pemesanan extends Controller
{
    //     public function pemesanan()
    //     {
    // return view('layouts.pemesanan');
    //   }

    public function pemesananmkn(Request $request)
    {
        $menumkn = menu::all();
        $no_meja = $request->query('no-meja');
        return view('layouts.pemesananmkn', ['makan' => $menumkn,'no_meja'=>$no_meja]);
        // return view('welcome',[ 'pesanan'=> $menumkn]);


    }

    public function insertpesan(Request $request)
    {
        $items = $request->input('items');

    }


    // public function pemesananmnm()
    // {
    //     $menumakan = menu::all();
    //     return view('layouts.pemesananmnm', ['makan' => $menumakan]);
    // }

    public function pemesananreservasi()
    {
        $menumakan = menu::all();
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
        $pesananan->status_pesanan = 'Di Proses';
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


        return response()->json(['success' => true]);
    }
    public function create1(Request $request)
    {
        $items = $request->input('items');
        $total = 0;
        $pesananan = new pemesanan_menu();
        // dd($request->input('nama_pelanggan'));

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


        return response()->json(['success' => true]);
    }




}
