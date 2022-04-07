<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'amount',
        'payment_type',
        'payment_status'
    ];

    public function order(){
        $this->belongsTo(Order::class);
    }
    public function user(){
        $this->belongsTo(User::class);
    }

}
