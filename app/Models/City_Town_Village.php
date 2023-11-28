<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City_Town_Village extends Model
{
    use HasFactory;
    
    protected $table = 'city_town_villages';
    
    public function area()
    {
        //return $this->hasMany(Area::class, 'area_id', 'id');
        return $this->belongsTo(Area::class);
    }
    
    public function hospitals()
    {
        //return $this->hasMany(Hospital::class, 'city_town_village_id'); 
        return $this->hasMany(Hospital::class);   
    }
}
