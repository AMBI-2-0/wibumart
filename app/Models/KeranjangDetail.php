<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeranjangDetail extends Model
{
    use HasFactory;

    //keranjang_details one-to-many ke products
    //satu keranjang_details bisa menyimpan banyak product
    public function product()
    {
        return $this->belongsTo('App\Product','product_id', 'id');
    }

    //keranjangs_details many-to-one ke keranjang
    //beberapa keranjang_details bisa disimpan satu keranjang
    public function keranjangs()
    {
        return $this->belongsTo('App\Keranjang','keranjangs_id', 'id');
    }
}
