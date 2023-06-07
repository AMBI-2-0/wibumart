<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $guarded = ['id'];

    //user one-to-many ke keranjangs
    //satu user bisa memiliki banyak keranjang
    public function keranjangs()
    {
        return $this->hasMany('App\Models\Keranjang','users_id', 'id');
    }

    //User one-to-many ke carts
    //satu user bisa memiliki banyak carts
    public function carts()
    {
        return $this->hasMany('App\Models\Cart','users_id', 'id');
    }
}
