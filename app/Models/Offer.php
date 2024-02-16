<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Offer extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'offer_code',
        'offer_image',
        'offer_discount_percent',
    ];
}
