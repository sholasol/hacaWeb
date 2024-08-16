<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RentalImage extends Model
{
    use HasFactory;

    protected $table = 'rental_images';

    protected $fillable = ['rental_id', 'image'];

    public function rental()
    {
        return $this->belongsTo(Rental::class);
    }
}


