<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Models\Location;

class LocationPincode extends Model
{
    use HasFactory,SoftDeletes;
    protected $guarded=[];

    protected $fillable = [
        'circle_name',
        'region_name',
        'division_name',
        'office_name',
        'pincode',
        'office_type',
        'delivery',
        'district',
        'state_name'
    ];

    public function location()
    {
        return $this->belongsTo(Location::class, 'division_name', 'city');
    }
}
