<?php

namespace App\Http\Controllers;

use App\Models\menu;
use App\Models\pemesanan_menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class SMenuMkn extends Controller
{

    public function smenumkn()
    {
        $menumkn = menu::where('type_menu', 'Makanan')->get();
        return view('layouts.smenumkn', ['menumkn' => $menumkn]);
    }

    public function tambahsmenumkn()
    {
        return view('layouts.tambahsmenumkn');
    }


    public function updateStatusMenu(Request $request, $id)
    {
        $pemesanan = menu::where('id', $id)->first();
        $pemesanan->update([
            'status' => $request->input('status')
        ]);

        return redirect()->back();
    }
    public function smenumnm()
    {
        $menumkn = menu::where('type_menu', 'Minuman')->get();
        return view('layouts.smenumnm', ['menumkn' => $menumkn]);
    }

    public function tambahsmenumnm()
    {
        return view('layouts.tambahsmenumnm');
    }

    public function insertmenumkn(Request $request)
    {
        $this->validate($request, [
            'nama_menu' => 'required',
            'harga_menu' => 'required',
            'gambar' => 'required',

        ]);

        $fileName = time() . '.' . $request->gambar->getClientOriginalExtension();
        $request->gambar->storeAs('public/images', $fileName);

        menu::create([
            'nama_menu' => $request->nama_menu,
            'harga_menu' => $request->harga_menu,
            'gambar' => $fileName,
            'status' => 'Tersedia',
            'type_menu' => 'Makanan',

        ]);

        return redirect()->route('smenumkn');
    }

    public function insertmenumnm(Request $request)
    {
        $this->validate($request, [
            'nama_menu' => 'required',
            'harga_menu' => 'required',
            'gambar' => 'required',

        ]);

        $fileName = time() . '.' . $request->gambar->getClientOriginalExtension();
        $request->gambar->storeAs('public/images', $fileName);

        $pesanan = menu::create([
            'nama_menu' => $request->nama_menu,
            'harga_menu' => $request->harga_menu,
            'gambar' => $fileName,
            'status' => 'Tersedia',
            'type_menu' => 'Minuman',
        ]);
        // ->addColumn('action', function ($row) {
        //     $editBtn = '<a href="' . route('smenumkn', $row) . '" class="btn btn-md btn-info mr-2 mb-2 mb-lg-0"><i class="far fa-edit"></i> Edit</a>';
        //     $deleteBtn = '<a href="' . route('smenumkn', $row) . '/delete" onclick="notificationBeforeDelete(event, this)" class="btn btn-md btn-danger btn-delete"><i class="fas fa-trash">Hapus</a>';
        //     return $editBtn . $deleteBtn;
        // });



        return redirect()->route('smenumnm');
    }
    public function deletemenu($id)
    {
        $data = menu::where('id', $id)->first();
        $data->delete();
        return redirect()->route('smenumnm')->with('success', 'Data Berhasil Di Hapus');
    }

    public function editmenu($id)
    {
        $menu = menu::findOrFail($id); // Mengambil post dengan id tertentu

        return view('layouts.editmenu', compact('menu')); // Menampilkan halaman edit dengan data post
    }

    public function updatemenu(Request $request)
    {
        $this->validate($request, [
            'nama_menu' => 'required',
            'harga_menu' => 'required',
            // 'gambar'=>'required',

        ]);
        $menu = menu::findOrFail($request->id); // Mengambil menu dengan id tertentu
        if ($request->gambar) {
            $fileName = time() . '.' . $request->gambar->getClientOriginalExtension();
            $request->gambar->storeAs('public/images', $fileName);
            $menu->update([
                'gambar' => $fileName,

            ]);

        }

        $menu->update([
            'nama_menu' => $request->nama_menu,
            'harga_menu' => $request->harga_menu,
            // 'status'=> 'Tersedia',
            'type_menu' => $request->type,
        ]);

        if ($request->type == 'Makanan') {
            return redirect()->route('smenumkn'); // Mengarahkan ke halaman detail post yang sudah diupdate
        }else{
            return redirect()->route('smenumnm'); // Mengarahkan ke halaman detail post yang sudah diupdate

        }
    }
}
