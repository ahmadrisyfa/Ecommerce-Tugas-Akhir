<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    protected $table='order_items';
    // protected $guarded = ['id'];
    protected $fillable =[
        'order_id',
        'product_id',
        'product_color_id',
        'quantity',
        'price'
    ];
}