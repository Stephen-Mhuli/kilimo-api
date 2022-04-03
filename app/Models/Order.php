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

    public function payments(){
        $this->hasOne(Payment::class);
    }
    public function shipments(){
        return $this->hasOne(Shipment::class);
    }
}
