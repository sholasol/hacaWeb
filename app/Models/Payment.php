<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $table = 'payments';

    protected $fillable = ['payment_id', 'product', 'quantity', 'price', 'currency',
        'customer', 'email', 'status', 'method','type'
    ];
}
