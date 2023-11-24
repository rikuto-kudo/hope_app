<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;
    
    public function city_town_village()
    {
        return $this->belongsTo(City_Town_Village::class, 'area_id', 'id');
    }
    
}
