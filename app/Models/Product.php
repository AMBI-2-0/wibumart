<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function keranjang_detail()
    {
        return $this->hasMany('App\KeranjangDetail','product_id', 'id');
    }
}
