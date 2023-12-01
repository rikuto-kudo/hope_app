<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class HospitalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        
        DB::table('hospitals')->insert([
            
            'name' => 'ACORN獣医神経病クリニック',
            'address' => '群馬県伊勢崎市田中町892-1',
            'phone_number' => '0270-27-5771',
            'field' => '神経科',
            'url' => 'https://acorn-vet.com/',
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
            'city_town_village_id' => 1
        ]);
        
        
        DB::table('hospitals')->insert([
            
            'name' => 'つるおか動物病院',
            'address' => '埼玉県川口市赤井二丁目9-16',
            'phone_number' => '048-284-0837',
            'field' => '皮膚科',
            'url' => 'https://tsuru-ah.com/',
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
            'city_town_village_id' => 2
        ]);
        
        
        DB::table('hospitals')->insert([
            
            'name' => 'ハート動物病院',
            'address' => '神奈川県相模原市南区南台4-15-2',
            'phone_number' => '042-702-1341',
            'field' => '眼科',
            'url' => 'http://www.7651122.com/index.html',
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
            'city_town_village_id' => 3
        ]);
        
        
        DB::table('hospitals')->insert([
            
            'name' => '王子ペットクリニック',
            'address' => '東京都北区豊島1-22-9',
            'phone_number' => '03-3913-2500',
            'field' => '泌尿器科',
            'url' => 'https://www.oji-pet.jp/',
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
            'city_town_village_id' => 4
        ]);
    }
}
