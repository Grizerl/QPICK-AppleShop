<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = "orders";
    protected $fillable = ['region', 'city', 'street', 'zipCode','house','phone','price','paymentMethod','order_number', 'product_name'];
}
