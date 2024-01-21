<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingCondition extends Model
{
    use HasFactory;
    public function realstate(){
        return $this->belongsTo(RealEstate::class);
    }
}
