<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    use HasFactory;

    protected $fillable =[
        'nama_menu',
        'harga_menu',
        'type_menu',
        'gambar',
        'status'
    ];
}
