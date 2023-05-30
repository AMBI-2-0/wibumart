<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $table = 'history';

    protected $fillable = [
        'image',
        'product_name',
        'price',
        'ordered_at',
        'status',
    ];

    protected $dates = [
        'ordered_at',
    ];
}
