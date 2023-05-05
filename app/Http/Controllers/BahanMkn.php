<?php

namespace App\Http\Controllers;

use App\Models\lapkeluar;
use App\Models\stokbahan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class BahanMkn extends Controller
{
    public function bahanmkn()
    {
        $makanan = stokbahan::where('typemakanan','Makanan')->get();
        return view('layouts.bahanmkn',['makanan'=>$makanan]);
    }

    public function bahanmnm()
    {
        $minuman = stokbahan::where('typemakanan','Minuman')->get();

        return view('layouts.bahanmnm',['minuman'=>$minuman]);
    }

    public function tambahbhnmkn1()
    {
        return view('layouts.tambahbhnmkn');
    }

    public function tambahbhnmnm1()
    {
        return view('layouts.tambahbhnmnm');
    }

    public function insertbhnmkn(Request $request){
        $this->validate($request,[
            'namabahan'=> 'required',
            'totalbahan'=> 'required',
            'subtotal'=>'required',

        ]);

        $stok = stokbahan::create([
            'namabahan'=> $request->namabahan,
            'totalbahan'=> $request->totalbahan,
            'subtotal'=> $request->subtotal,
            'id_user'=> Auth::user()->id,
            'typemakanan'=> 'Makanan',
        ]);

lapkeluar::create([
    'id_stokbahan' => $stok->id,
        'nama_bahan'=>  $request->namabahan,
        'waktu_pembelian'=> Carbon::now(),
        'total_bahan' => $request->totalbahan,
        'sub_total' => $request->subtotal,
]);



            return redirect()->route('bahanmkn');

    }

    public function insertbhnmnm(Request $request){
        $this->validate($request,[
            'namabahan'=> 'required',
            'totalbahan'=> 'required',
            'subtotal'=>'required',

        ]);

       $stok = stokbahan::create([
            'namabahan'=> $request->namabahan,
            'totalbahan'=> $request->totalbahan,
            'subtotal'=> $request->subtotal,
            'id_user'=> Auth::user()->id,
            'typemakanan'=> 'Minuman',
        ]);

        lapkeluar::create([
            'id_stokbahan' => $stok->id,
                'nama_bahan'=>  $request->namabahan,
                'waktu_pembelian'=> Carbon::now(),
                'total_bahan' => $request->totalbahan,
                'sub_total' => $request->subtotal,
        ]);



            return redirect()->route('bahanmnm');

    }
}
