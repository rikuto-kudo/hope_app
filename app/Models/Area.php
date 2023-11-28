<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;
    
    protected $table = 'areas';
    
    public function getHospitals()
    {
        $hospiltas = Area::pluck('name', 'id');
        
        return $hospiltas;
    }
    
    /*public function city_town_villages()
    {
         
        //return $this->belongsTo(City_Town_Village::class, 'area_id', 'id');
        return $this->hasMany(City_Town_Village::class);
        //return $this->hasMany(City_Town_Village::class, 'area_id');
    }*/
    
    public function hospitals()
    {
        return $this->hasMany(Hospital::class);
    }
    
}
