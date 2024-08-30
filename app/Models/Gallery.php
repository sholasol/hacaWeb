<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $table = 'galleries';
    protected $fillable = [
        'title','type',
        'file', 'length','youtube',
        'format', 'created','price',
        'published', 'physical_copy',
        'for_listening', 'free_download',
        'download_link', 'digital_sale',
        'digital_formats','sales_link', 'description'

    ];
}
