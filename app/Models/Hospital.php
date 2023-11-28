<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    use HasFactory;
    
    protected $table = 'hospitals';
    
    /*public function city_town_village()
    {
        //return $this->belongsTo(City_Town_Village::class, 'city_town_village_id');
        return $this->belongsTo(City_Town_Village::class);
    }*/
    
    public function area()
    {
        return $this->belongsTo(Area::class);
    }
}
