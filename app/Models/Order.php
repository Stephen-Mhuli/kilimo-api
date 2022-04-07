<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_total',
        'order_description',
    ];

    public function payment(){
        $this->hasOne(Payment::class);
    }
    public function shipment(){
        return $this->hasOne(Shipment::class);
    }
    public function product(){
        return $this->hasMany(Product::class);
    }
}
