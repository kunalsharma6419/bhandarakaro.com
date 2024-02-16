<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\location;
class Temple extends Model
{
    use HasFactory,SoftDeletes;
    protected $guarded=[];
    
    public function location() {
    return $this->belongsTo(Location::class,'pin_id');
} 
}
