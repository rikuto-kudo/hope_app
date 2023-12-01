<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City_Town_Village extends Model
{
    use HasFactory;

    protected $table = 'city_town_villages';
    
    //protected $fillable = ['name', 'area_id'];

    public function hospitals()
    {
        return $this->hasMany(Hospital::class, 'city_town_village_id');
    }
    
    /*public static function changeNameColumnCityTownVillages()
    {
        $cityTownVillagesData = [
            1 => ['name' => '江別市',
                  'area_id' => 1,
                 ],
                 
            2 => ['name' => '札幌市',
                  'area_id' => 1,
                 ],
                 
            3 => ['name' => '帯広市',
                  'area_id' => 1,
                 ],
                 
            4 => ['name' => '豊中市',
                  'area_id' => 27,
                 ],
            
        ];
        
        foreach ($cityTownVillagesData as $cityTownVillageId => $data) {
            $cityTownVillage = self::find($cityTownVillageId);

            if ($cityTownVillage) {
                $cityTownVillage->name = $data['name'];
                $cityTownVillage->area_id = $data['area_id'];

                $cityTownVillage->save();
            }
        }
    }*/
}
