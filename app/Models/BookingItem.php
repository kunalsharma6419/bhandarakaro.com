<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\FoodProduct;

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

    public function foodproducts()
    {
        return $this->belongsTo(FoodProduct::class, 'prod_id', 'id');
    }
}
