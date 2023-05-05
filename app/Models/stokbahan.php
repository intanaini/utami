<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stokbahan extends Model
{
    use HasFactory;

    protected $fillable = [
        'namabahan',
        'totalbahan',
        'subtotal',
        'id_user',
        'typemakanan'
    ];

}
