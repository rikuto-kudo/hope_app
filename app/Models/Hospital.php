<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    use HasFactory;

    protected $table = 'hospitals';
    
    protected $fillable = ['name', 'address', 'phone_number', 'field', 'area_id', 'url', 'city_town_village_id'];
    

    public function cityTownVillage()
    {
        return $this->belongsTo(CityTownVillage::class, 'city_town_village_id');
    }

    public function area()
    {
        return $this->belongsTo(Area::class, 'area_id');
    }
    
    
    //hospitalsテーブルのデータの更新
    public static function ColumnDataHospitals()
    {
        $hospitalData = [
            /*1 => ['name' => '酪農学園大学付属動物医療センター',
                  'address' => '北海道江別市文京台緑町582-1',
                  'phone_number' => '011-386-1213',
                  'field' => '眼科/循環器/筋肉/整形外科/感染症/腫瘍・がん/心の病気',
                  'area_id' => 1,
                  'url' => 'https://amc.rakuno.ac.jp/?utm_source=pet.caloo.jp&utm_medium=referral',
                  'city_town_village_id' => 1,
                 ],
                 
            2 => ['name' => 'どうぶつ眼科専門クリニック',
                  'address' => '大阪府豊中市西緑丘3丁目15番19号',
                  'phone_number' => '0120-960-038',
                  'field' => '眼科',
                  'area_id' => 27,
                  'url' => 'https://vosc.us/?utm_source=pet.caloo.jp&utm_medium=referral',
                  'city_town_village_id' => 4,
                 ],*/
            
            3 => [//'name' => '日本獣医生命科学大学動物動物医療センター',
                  'address' => '東京都武蔵野市境南町1-7-1',
                  /*'phone_number' => '0422-90-4000',
                  'field' => '眼科/皮膚科/脳・神経/循環器/呼吸器/消化器/腎・泌尿器/内分泌代謝/筋肉/整形外科/生殖器/腫瘍・がん/心の病気',
                  'area_id' => 13,
                  'url' => 'https://www.nvlu.ac.jp/amedical/?utm_source=pet.caloo.jp&utm_medium=referral',
                  'city_town_village_id' => 6,*/
                 ],
            
            /* => ['name' => '鹿児島大学農学部付属動物病院',
                  'address' => '鹿児島県鹿児島市郡元1-21-24',
                  'phone_number' => '099-285-8750',
                  'field' => '脳・神経/循環器/腎・泌尿器/筋肉/整形外科/感染症/腫瘍・がん/心の病気',
                  'area_id' => 46,
                  'url' => 'https://www.vet.kagoshima-u.ac.jp/KUVTH/?utm_source=pet.caloo.jp&utm_medium=referral',
                  'city_town_village_id' => 7,
                 ],*/
            
        ];
        
        foreach ($hospitalData as $hospitalId => $data) {
            $hospital = self::find($hospitalId);

            if ($hospital) {
                //$hospital->name = $data['name'];
                $hospital->address = $data['address'];
                //$hospital->phone_number = $data['phone_number'];
                //$hospital->field = $data['field'];
                //$hospital->area_id = $data['area_id'];
                //$hospital->url = $data['url'];
                //$hospital->city_town_village_id = $data['city_town_village_id'];

                $hospital->save();
            }
        }
    }
    
    /*protected $hospital = 'hospitals';
    
    public function city_town_village()
    {
        return $this->belongsTo(City_Town_Village::class);
    }*/
}
