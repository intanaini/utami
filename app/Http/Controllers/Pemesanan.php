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

    public function pemesananmkn()
    {
        $menumkn = menu::all();
        // return view('layouts.pemesananmkn', ['pesanan' => $menumkn]);
        return view('welcome',[ 'pesanan'=> $menumkn]);


    }

    public function insertpesan(Request $request)
    {
        $items = $request->input('items');

    }


    public function pemesananmnm()
    {
        $menumakan = menu::all();
        return view('layouts.pemesananmnm', ['makan' => $menumakan]);
    }

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
        $pesananan->no_telepon = $request->input('no_telpon');
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

    public function simpan(Request $request)
    {
        $items = $request->input('items');
        $total = 0;
        $pesananan = new pemesanan_menu();

        $pesananan->nama_pelanggan = 'coba';
        $pesananan->no_telepon = 'coba';
        $pesananan->waktu = Carbon::now();
        $pesananan->total_pesanan = $total;
        $pesananan->status_pesanan = 'coba';
        $pesananan->total_pembayaran = $total;
        $pesananan->type_pesanan = 'Reservasi';
        $pesananan->catatan = 'ppp';
        $pesananan->save();

        foreach ($items as $id => $quantity) {
            $price = menu::where('id', $id)->value('harga_menu');
            $subtotal = $price * $quantity;
            $total += $subtotal;

            $penjualan = new rincian_psn();
            $penjualan->barang_id = $id;
            // $penjualan->barang_id = $id;
            $penjualan->transaksi_id = $pesananan->id;
            $penjualan->qty = $quantity;
            $penjualan->total = $subtotal;

            $penjualan->save();
        }

        rincian_psn::where('qty', 0)->delete();
        $jumlah = rincian_psn::where('transaksi_id', $pesananan->id)->sum('total');
        $jumlah_psn = rincian_psn::where('transaksi_id', $pesananan->id)->sum('qty');

        $pesananan->update(['total_pembayaran' => $jumlah, 'total_pesanan' => $jumlah_psn]);


        return response()->json(['success' => true]);
    }
    public function insertreservasi(Request $request)
    {
        // $this->validate($request, [
        //     'nama_pelanggan' => 'required',
        //     'no_telepon' => 'required|min:11',
        //     'waktu' => 'required',
        //     'total_pesanan' => 'required',
        //     'status_pesanan' => 'required',
        //     'total_pembayaran' => 'required',
        //     'catatan' => 'required',

        // ]);

        // pemesanan_menu::create([
        //     'nama_pelanggan' => $request->namapelanggan,
        //     'no_telepon' => $request->no_telepon,
        //     'waktu' => $request->waktu,
        //     'total_pesanan' => $request->total_pesanan,
        //     'status_pesanan' => $request->status_pesanan,
        //     'total_pembayaran' => $request->total_pembayaran,
        //     'catatan' => $request->catatan,
        //     // 'id_user'=> Auth::user()->id,
        //     'typepemesanan' => 'Reservasi',
        // ]);

        $items = $request->input('items');
    //    dd($request->all());


        // $total = 0;
        // $pesananan = new pemesanan_menu();
        // // $pesananan->id_lapmasuk = 1;
        // $pesananan->nama_pelanggan = 'coba';
        // $pesananan->no_telepon = 'coba';
        // $pesananan->waktu = Carbon::now();
        // $pesananan->total_pesanan = $total;
        // $pesananan->status_pesanan = 'coba';
        // $pesananan->total_pembayaran = $total;
        // $pesananan->type_pesanan = 'Reservasi';
        // $pesananan->catatan = 'ppp';
        // $pesananan->save();

        // foreach ($items as $id => $quantity) {
        //     $price = menu::where('id', $id)->value('price');
        //     $subtotal = $price * $quantity;
        //     $total += $subtotal;

        //     $penjualan = new rincian_psn();
        //     $penjualan->barang_id = $id;
        //     // $penjualan->barang_id = $id;
        //     $penjualan->transaksi_id = $pesananan->id;
        //     $penjualan->qty = $quantity;
        //     $penjualan->total = $subtotal;

        //     $penjualan->save();
        // }

        // rincian_psn::where('qty', 0)->delete();
        // $jumlah = rincian_psn::where('transaksi_id', $pesananan->id)->sum('total');
        // $jumlah_psn = rincian_psn::where('transaksi_id', $pesananan->id)->sum('qty');

        // $pesananan->update(['total_pembayaran' => $jumlah, 'total_pesanan' => $jumlah_psn]);


        // return response()->json(['success' => true]);

        // return redirect()->route('pemesananreservasi');
    }

    public function SimpanPsn(Request $request)
    {
        $items = $request->input('items');
        $total = 0;
        $transaction = new pemesanan_menu();
        $transaction->total = $total;
        $transaction->catatan = $request->input('catatan'); // retrieve the catatan field from the request object
        $transaction->save();

        foreach ($items as $id => $quantity) {
            $price = menu::where('id', $id)->value('price');
            $subtotal = $price * $quantity;
            $total += $subtotal;
            $penjualan = new rincian_psn();
            $penjualan->barang_id = $id;
            // $penjualan->barang_id = $id;
            $penjualan->transaksi_id = $transaction->id;
            $penjualan->qty = $quantity;
            $penjualan->total = $subtotal;

            $penjualan->save();
        }

        $jumlah = rincian_psn::where('transaksi_id', $transaction->id)->sum('total');
        $transaction->update(['total' => $jumlah]);


        rincian_psn::where('qty', 0)->delete();
        // Save the total value to your database or perform other actions...
        // For example:
        // $transaction = new Transaction();

        return response()->json(['success' => true]);
    }
}
