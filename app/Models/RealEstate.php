<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class RealEstate extends Model
{
    use HasFactory;
    public function image():MorphMany{
        return $this->morphMany(RealEstateImage::class,'imageable');
    }
    public function featuers(){
        return $this->hasOne(Features::class);
    }
    public function conditions(){
        return $this->hasOne(BookingCondition::class);
    }
}
