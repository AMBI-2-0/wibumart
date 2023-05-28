<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
    use HasFactory;

    //keranjang one-to-one ke user
    //satu keranjang hanya bisa dimiliki oleh satu user
    public function users()
    {
        return $this->belongsTo('App\Models\User','users_id', 'id');
    }

    //keranjang one-to-many ke keranjangs_details
    //satu keranjang bisa menyimpan banyak keranjang_details
    public function keranjang_details()
    {
        return $this->hasMany('App\Model\KeranjangDetail','keranjangs_id', 'id');
    }
}
