<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Models\Temple;
use App\Models\LocationPincode;

class Location extends Model
{
    use HasFactory,SoftDeletes;
    protected $guarded=[];

    protected $fillable = [
        'state',
        'city',
        'location_image',
        'l_pincode',
    ];

    public function temple() {
        return $this->hasMany(Temple::class,'pin_id');
    }

    public function locationPincodes()
    {
        return $this->hasMany(LocationPincode::class, 'city', 'division_name');
    }
}
