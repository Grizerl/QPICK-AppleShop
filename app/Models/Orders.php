<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    protected $fillable = ['region', 'city', 'street', 'zipCode','house','phone','price','paymentMethod','order_number'];
}
