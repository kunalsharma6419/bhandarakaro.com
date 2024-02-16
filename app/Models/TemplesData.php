<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemplesData extends Model
{
    use HasFactory;
    protected $table = 'temples_data';

    protected $fillable = [
        'temple_location_link',
        'temple_name',
        'rating',
        'no_of_reviews',
        'type',
        'full_address_code',
        'open_status',
        'timings',
        'temple_image_url',
    ];
}
