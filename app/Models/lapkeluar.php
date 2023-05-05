<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lapkeluar extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_stokbahan',
        'nama_bahan',
        'waktu_pembelian',
        'total_bahan',
        'sub_total'
    ];
}
