<?php

namespace App\Http\Controllers;

use App\Models\lapkeluar;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Laporan extends Controller
{
    public function lpemasukan()
    {
       return view('layouts.lpemasukkan');
    }

    public function lpengeluaran()
    {
        $laporan= lapkeluar::all();
        $tahunz= lapkeluar::pluck('created_at')->unique('year');
       return view('layouts.lpengeluaran',['laporan'=>$laporan,'tahunz'=>$tahunz]);
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

    public function pengeluaranperminggu(Request $request)
    {
        $minggu = $request->input('minggu');

        // Logika untuk mengambil data laporan per minggu dari database
        $lapkelming = lapkeluar::all();
        // whereBetween('tanggal', [tanggal_awal, tanggal_akhir])->get();

        // Kembalikan tampilan laporan per minggu dengan data yang diperoleh
        return view('layouts.pengeluaranperminggu', ['laporan'=>$lapkelming]);
    }

public function filter(Request $request)
{

    $minggu = $request->input('minggu');

    //     $lapkelming = lapkeluar::whereBetween('created_at', $minggu)
    //     ->get();
    //    return view('layouts.pengeluaranperbulan',['laporan'=>$lapkelbul]);


        $hari = $request->input('tanggal');
        // $minggu = $request->input('minggu');
        $bulan = $request->input('bulan');
        $tahun = $request->input('tahun');
// dd(date('Y'));
// Assuming you have a model named "YourModel" representing your data

// Start building the query
$query = DB::table('lapkeluars');

if (!$hari == null) {
    $query->whereDay('created_at',$hari);
}

if (!$bulan == null) {
    $query->whereMonth('created_at',$bulan);

    if ($tahun == null) {
        $tahun =date('Y');
        $query->whereYear('created_at',$tahun);
    }
    // if (!$minggu == null && $tahun == null) {
    //     $query->whereRaw("WEEK(created_at) = 1 AND MONTH(created_at) = 5 AND YEAR(created_at) = 2023");
    // }elseif (!$minggu == null  && !$tahun == null) {
    //     $query->whereRaw("WEEK(created_at) = 1 AND MONTH(created_at) = 5 AND YEAR(created_at) = 2023");
    // }
}
if (!$tahun == null) {
    $query->whereYear('created_at',$tahun);
}



// Execute the query
$results = $query->get();


// Execute the query
// $results = $query->get();
        // dd($minggu);
       return view('layouts.pengeluaranperbulan',['laporan'=>$results]);
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




