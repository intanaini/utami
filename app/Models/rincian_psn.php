<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rincian_psn extends Model
{
    use HasFactory;

    public function menu()
    {
      return $this->belongsTo(menu::class,'id_menu');
    }
}
