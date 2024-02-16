<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlashDeal extends Model
{
    use HasFactory;

    public function foodProduct()
    {
        return $this->belongsTo(FoodProduct::class, 'food_id');
    }
}
