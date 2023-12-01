<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    protected $table = 'areas';
    
    protected $fillable = ['name'];

    public function cityTownVillages()
    {
        return $this->hasMany(CityTownVillage::class, 'area_id');
    }
    
    
    //県名データの変更
    /*public static function changeNameColumnAreas()
    {
        $areaData = [
            1 => ['name' => '北海道'],
            2 => ['name' => '青森県'],
            3 => ['name' => '岩手県'],
            4 => ['name' => '宮城県'],
        ];
        
        foreach ($areaData as $areaId => $data) {
            $area = self::find($areaId);

            if ($area) {
                $area->name = $data['name'];

                $area->save();
            }
        }
    }*/
}
