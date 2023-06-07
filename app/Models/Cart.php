<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    //Cart one-to-one ke user
    //Satu cart hanya bisa dimiliki oleh satu user
    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id', 'id');
    }

    //Carts one-to-many ke products
    //Satu carts bisa menyimpan banyak product
    public function products()
    {
        return $this->belongsTo('App\Models\Product','product_id', 'id');
    }




    protected $table = 'carts';
    protected $fillable = [
        'users_id',
        'product_id',
        'prod_qty',

    ];
}
