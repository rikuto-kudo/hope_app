<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddCityTownVillageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        $addCityTownVillage = [
        [
            'name' => '盛岡市',
            'area_id' => 3
        ],
        
        [
            'name' => '武蔵野市',
            'area_id' => 13
        ],
        
        [
            'name' => '鹿児島市',
            'area_id' => 46
        ],
        
        [
            'name' => '泉佐野市',
            'area_id' => 27
        ],
        
        [
            'name' => '川口市',
            'area_id' => 11
        ],
        
        [
            'name' => '藤沢市',
            'area_id' => 14
        ],
        
        [
            'name' => '川崎市',
            'area_id' => 14
        ],
        
        [
            'name' => '新宿区',
            'area_id' => 13
        ],
        
        [
            'name' => '門真市',
            'area_id' => 27
        ],
        
        [
            'name' => '岐阜市',
            'area_id' => 21
        ],
        
        [
            'name' => '山口市',
            'area_id' => 35
        ],
        
        [
            'name' => '足立区',
            'area_id' => 13
        ],
        
        [
            'name' => '府中市',
            'area_id' => 13
        ],
        
        [
            'name' => '十和田市',
            'area_id' => 2
        ],
        
        [
            'name' => '大阪市',
            'area_id' => 27
        ],
        
        [
            'name' => '文京区',
            'area_id' => 13
        ],
        
        [
            'name' => '横浜市',
            'area_id' => 14
        ],
        
        [
            'name' => '京都市',
            'area_id' => 26
        ],
        
        [
            'name' => '世田谷区',
            'area_id' => 13
        ],
        
        [
            'name' => '東大阪市',
            'area_id' => 27
        ],
        
        [
            'name' => '江東区',
            'area_id' => 13
        ],
        
        [
            'name' => '鳥取市',
            'area_id' => 31
        ],
        
        [
            'name' => '福岡市',
            'area_id' => 40
        ],
        
        [
            'name' => '所沢市',
            'area_id' => 11
        ],
        
        [
            'name' => '名古屋市',
            'area_id' => 23
        ],
        
        [
            'name' => '東久留米市',
            'area_id' => 13
        ],
        
        [
            'name' => '長岡市',
            'area_id' => 15
        ],
        
        [
            'name' => '奈良市',
            'area_id' => 1
        ],
        
        [
            'name' => '北区',
            'area_id' => 27
        ],
        
        [
            'name' => '宮崎市',
            'area_id' => 45
        ],
        
        [
            'name' => '相模原市',
            'area_id' => 14
        ],
        
        [
            'name' => '仙台市',
            'area_id' => 4
        ],
        
        [
            'name' => '目黒区',
            'area_id' => 13
        ],
        
        [
            'name' => '伊勢崎市',
            'area_id' => 10
        ],
        
        ];
        
        DB::table('city_town_villages')->insert($addCityTownVillage);
    }
}
