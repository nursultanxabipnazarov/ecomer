<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'user_id',
        'user_name',
        'email',
        'phone',
        'address',
        'product_name',
        'img',
        'price',
        'total_price',
        'quantity',
        'payment_status',
        'delivery_status',
    ];
}
