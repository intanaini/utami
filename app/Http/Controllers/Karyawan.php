<?php

namespace App\Http\Controllers;

use App\Models\pemesanan_menu;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class Karyawan extends Controller
{
// user karyawan
    public function karyawan()
    {
       return view('karyawan');
    }

    public function dftrpesanan()
    {
        $pemesanan = pemesanan_menu::where('type_pesanan','Makan Ditempat')->get();
    return view('layouts.dftrpesanan', ['pesan' => $pemesanan]);
    }

    public function updateStatusPsn(Request $request,$id)
    {
        $pemesanan = pemesanan_menu::where('id',$id)->first();
        $pemesanan->update([
            'status_pesanan'=>$request->input('status_pesanan')
        ]);

        return redirect()->back();

    }

    public function dftrreservasi()
    {
        $pemesanan = pemesanan_menu::where('type_pesanan','Reservasi')->get();

    return view('layouts.dftrreservasi',['pesan' => $pemesanan]);

    }


    public function tambahKaryawan()
    {

        return view('layouts.tambahKry');
    }
    public function insertdata(Request $request){
        $this->validate($request,[
            'name'=> 'required',
            'email'=> 'required',
            'password'=>'required',
            'notelpon'=>'required'

        ]);

        User::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=> bcrypt($request->password),
            'notelpon'=> $request->notelpon,
            'remember_token'=> Str::random(60),
        ]);



            return redirect()->route('home');

    }
    public function deleteuser($id)
    {
        $data = user::where('id',$id)->first();
        $data->delete();
        return redirect()->route('home')->with('success','Data Berhasil Di Hapus');
    }
}
