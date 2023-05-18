<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeranjangDetail extends Model
{
    use HasFactory;

    public function product()
    {
        return $this->belongsTo('App\Product','product_id', 'id');
    }

    public function keranjang()
    {
        return $this->belongsTo('App\Keranjang','keranjang_id', 'id');
    }
}