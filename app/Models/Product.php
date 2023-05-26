<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;


    protected $guarded =['id'];

    //products many-to-one ke keranjang_details
    //banyak product bisa disimpan oleh satu keranjang_details
    public function keranjang_details()
    {
        return $this->hasMany('App\KeranjangDetail','product_id', 'id');
    }
}
