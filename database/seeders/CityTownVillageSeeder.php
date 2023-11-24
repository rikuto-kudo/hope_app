<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class CityTownVillageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('city_town_villages')->insert([
            'name' => '伊勢崎市'
        ]);
        
        DB::table('city_town_villages')->insert([
            'name' => '川口市'
        ]);
        
        DB::table('city_town_villages')->insert([
            'name' => '相模原市'
        ]);
        
        DB::table('city_town_villages')->insert([
            'name' => '北区'
        ]);
        
        //11/23日追加分
        /*DB::table('city_town_villages')->insert([
            'name' => '川越市'
        ]);*/
    }
}
