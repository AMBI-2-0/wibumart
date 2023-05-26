<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;


    protected $guarded =['id'];

    public function scopeFilterByCategory($query, $categoryId)
{
    if ($categoryId) {
        return $query->where('kategori_id', $categoryId);
    }
    return $query;
}

    public function kategori(){
        return $this->belongsTo(Kategori::class);
    }

    //products many-to-one ke keranjang_details
    //banyak product bisa disimpan oleh satu keranjang_details
    public function keranjang_detail()
    {
        return $this->hasMany('App\KeranjangDetail','product_id', 'id');
    }



}
