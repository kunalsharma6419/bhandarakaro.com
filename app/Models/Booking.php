<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BookingItem;

class Booking extends Model
{
    use HasFactory;
    protected $table= 'bookings';
    protected $fillable = [
        'user_id',
        'full_name',
        'email',
        'phone',
        'user_address',
        'booking_address_type',
        'booking_address',
        'booking_temple_name',
        'booking_temple_address',
        'city',
        'state',
        'country',
        'pincode',
        'total_price',
        'status',
        'message',
        'booking_date',
        'booking_time',
        'tracking_no',
    ];

    public function bookingitems()
    {
        return $this->hasMany(BookingItem::class);
    }
}
