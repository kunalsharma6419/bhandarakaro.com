<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class FoodProduct extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'name',
        'price',
        'image',
        'description',
        'category_id',
        'ingredient',
        'tags',
        'is_deal',
        'offer_id',
    ];

    protected $casts = [
        'image' => 'array',
        'tags'=> 'array',
    ];

   public function flashDeals()
    {
        return $this->hasMany(FlashDeal::class, 'food_id');
    }
    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }

    public function offer()
    {
        return $this->belongsTo(Offer::class,'offer_id');
    }

    public function foodItemLocationByFoodProdcut()
    {
        return $this->hasMany(FoodItemLocationPrice::class,'food_item_id');
    }
}



