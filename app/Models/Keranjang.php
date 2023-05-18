<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->belongsTo('App\User','users_id', 'id');
    }

    public function keranjang_detail()
    {
        return $this->hasMany('App\KeranjangDetail','keranjang_id', 'id');
    }
}
