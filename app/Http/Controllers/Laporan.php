<?php

namespace App\Http\Controllers;

use App\Models\lapkeluar;
use App\Models\pemesanan_menu;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Laporan extends Controller
{
    public function grafikthn()
    {
        $data_masuk =pemesanan_menu::all();
        $data_keluar =lapkeluar::all();
        $keluar =[];
        $masuk =[];
        $tahun = [];

        foreach ($data_masuk as $key) {
            array_push($tahun,$key->created_at->format('Y'));
        }
        foreach ($data_keluar as $key) {
            array_push($tahun,$key->created_at->format('Y'));
        }
        $tahun =array_unique($tahun);
        asort($tahun);
        // dd($tahun);

        foreach ($tahun as $key => $value) {
            $dk = lapkeluar::whereYear('created_at',$value)->get();
            array_push($keluar,$dk->sum('sub_total'));

        }
        foreach ($tahun as $key => $value) {
            $dm = pemesanan_menu::whereYear('created_at',$value)->get();
            array_push($masuk,$dm->sum('total_pembayaran'));

        }
        $tahun = array_values($tahun);
        // dd($masuk);


       return view('layouts.grafikthn',compact(['tahun','masuk','keluar']));
    }
    public function grafikmasuk()
    {
       return view('layouts.grafikmasuk');
    }
    public function lpemasukan()
    {
        $lpmasuk = pemesanan_menu::all();
        $thn= pemesanan_menu::pluck('created_at')->unique('year');

       return view('layouts.lpemasukkan', ['lpmasuk'=>$lpmasuk,'thn'=>$thn]);
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
    public function masukanperbulan(Request $request)

    {
        $bulan = $request->input('bulan');
        $lapkelmas = pemesanan_menu::all();
       return view('layouts.masukanperbulan',['lpmasuk'=>$lapkelmas]);
    }

    public function masukanperminggu(Request $request)
    {
        $minggu = $request->input('minggu');

        // Logika untuk mengambil data laporan per minggu dari database
        $lapmasming = pemesanan_menu::all();
        // whereBetween('tanggal', [tanggal_awal, tanggal_akhir])->get();

        // Kembalikan tampilan laporan per minggu dengan data yang diperoleh
        return view('layouts.masukanperminggu', ['lpmasuk'=>$lapmasming]);
    }

    public function filtermasukan(Request $request)
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
$query =pemesanan_menu::query();

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
       return view('layouts.masukanperbulan',['lpmasuk'=>$results]);
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




