<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pemesanan_menu extends Model
{
    use HasFactory;
    protected $fillable =[
        'nama_pelanggan',
        'no_telepon',
        'waktu',
        'total_pesanan',
        'status_pesanan',
        'total_pembayaran',
        'catatan',
        'type_pemesanan'
    ];


    protected $casts =[
        'waktu'=> 'datetime'
    ];

    public function detail()
    {
      return  $this->hasMany(rincian_psn::class,'id_pesanan');
    }
}
