<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name',
        'phone_number',
        'price'
    ];


    public function user()
    {
        $this->belongsTo(User::class);
    }
    public function order()
    {
        $this->belongsTo(Order::class);
    }
}
