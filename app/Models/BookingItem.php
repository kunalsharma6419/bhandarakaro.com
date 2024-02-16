<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingItem extends Model
{
    use HasFactory;
    protected $table= 'booking_items';
    protected $fillable = [
        'booking_id',
        'prod_id',
        'price',
        'qty',
    ];
}
