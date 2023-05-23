<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $data = User::all();
        // return view('home',compact('data'));
        if ( Auth::user()->role == "admin"){
            $tittle = 'Dashboard';
            // return view('admin.dashboard', compact('tittle'));
            return redirect()->route('admin');

        // } elseif (Auth::user()->role == "user"){
        //     $tittle = 'Menu';
        //     return redirect()->route('pemesananmkn');

        } elseif (Auth::user()->role == "karyawan"){
            $tittle = 'Karyawan';
            return redirect()->route('dftrpesanan');


    } else {
        return view('auth.login');
    }
    }

    public function karyawan()
    {
         $data = User::all();
        return view('admin',compact('data'));
    }
}
