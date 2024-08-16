<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    use HasFactory;

    protected $table= 'rentals';

    protected $fillable = ['title', 'price','type', 'size', 'occupacy', 'status', 'features', 'description'];


    public function rentalimages()
    {
        return $this->hasMany(RentalImage::class, 'rental_id');
    }

    // public function bookings()
    // {
    //     return $this->hasMany(Booking::class, 'room_id');
    // }

    public function firstImage()
    {
        return $this->hasOne(RentalImage::class)->oldest();
    }
}
