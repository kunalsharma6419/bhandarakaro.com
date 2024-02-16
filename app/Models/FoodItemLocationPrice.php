<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Location;
use App\Models\FoodProduct;
class FoodItemLocationPrice extends Model
{
    use HasFactory;
    public function location()
    {
        return $this->belongsTo(Location::class,'pincode');
    }
    public function foodProductss()
    {
        return $this->belongsTo(FoodProduct::class,'food_item_id');
    }
}
