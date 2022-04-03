<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    public function product()
    {
        $this->hasMany(Product::class);
    }
    public function order()
    {
        return $this->hasOne(Order::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
