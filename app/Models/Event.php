<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $table = 'events';

    protected $fillable = ['name', 'description','date', 'image', 'status'];


    public function eventImages()
    {
        return $this->hasMany(EventImages::class, 'event_id');
    }
}
