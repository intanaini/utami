<?php

namespace App\Http\Controllers;

use App\Models\lapkeluar;
use Carbon\Carbon;
use Illuminate\Http\Request;

class Laporan extends Controller
{
    public function lpemasukan()
    {
       return view('layouts.lpemasukkan');
    }

    public function lpengeluaran()
    {
        $laporan= lapkeluar::all();
       return view('layouts.lpengeluaran',['laporan'=>$laporan]);
    }

    public function coba()
    {
       return view('layouts.coba');
    }
    public function masukanperbulan()
    {
       return view('layouts.masukanperbulan');
    }
    // public function pengeluaranperbulan()
    // {
    //     $lapkelbul = lapkeluar::whereBetween('waktu_pembelian',[Carbon::now()->subMonth()->format("Y-m-d H:i:s"), Carbon::now()])->get();
    //    return view('layouts.pengeluaranperbulan',['laporan'=>$lapkelbul]);
    // }

    public function pengeluaranperbulan(Request $request)
    {
        $bulan = $request->input('bulan');

        $lapkelbul = lapkeluar::all();
       return view('layouts.pengeluaranperbulan',['laporan'=>$lapkelbul]);
    }

public function filter(Request $request)
{
    $bulan = $request->input('bulan');

        $lapkelbul = lapkeluar::whereMonth('created_at', $bulan)
        ->get();
       return view('layouts.pengeluaranperbulan',['laporan'=>$lapkelbul]);
}
    // {
        // public function index()
        // {
        //     // Logika untuk menampilkan halaman laporan
        //     return view('layouts.lpengeluaran');
        // }

    //     public function filter(Request $request)
    //     {
    //         // Validasi input
    //         $request->validate([
    //             'bulan' => 'required',
    //         ]);

    //         // Ambil input bulan dari form
    //         $bulan = $request->input('bulan');

    //         // Query data laporan berdasarkan bulan
    //         $laporan = Laporan::whereMonth('tanggal', $bulan)
    //                     ->get();

    //         // Kembalikan data laporan ke halaman laporan
    //         return view('layouts.lpengeluaran', ['laporan' => $laporan]);
    //     }
    }




