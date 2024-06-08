<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'menu_name',
        'menu_image',
        'description',
        'price',
    ];

    // Order dimiliki oleh User (belongsTo).
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Order memiliki banyak OrderItem (hasMany).
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}
