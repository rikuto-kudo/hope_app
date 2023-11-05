<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class HospitalTimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('hospital_times')->insert([
            'monday_start' => '9:00',  
            'monday_end' => '17:00', 
            'tuesday_start' => '9:00',  
            'tuesday_end' => '17:00',  
            'wednesday_start' => '9:00',  
            'wednesday_end' => '17:00', 
            'thursday_start' => '9:00', 
            'thursday_end' => '17:00', 
            'friday_start' => '9:00', 
            'friday_end' => '17:00', 
            'saturday_start' => '9:00', 
            'saturday_end' => '17:00',
            'sunday_start' => '休診', 
            'sunday_end' => '休診', 
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
            'hospital_id' => 1
        ]);
        
        DB::table('hospital_times')->insert([
            'monday_start' => '9:00',  
            'monday_end' => '18:30', 
            'tuesday_start' => '9:00',  
            'tuesday_end' => '18:30',  
            'wednesday_start' => '9:00',  
            'wednesday_end' => '18:30', 
            'thursday_start' => '休診', 
            'thursday_end' => '休診', 
            'friday_start' => '9:00', 
            'friday_end' => '18:30', 
            'saturday_start' => '9:00', 
            'saturday_end' => '18:30', 
            'sunday_start' => '9:00', 
            'sunday_end' => '18:00', 
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
            'hospital_id' => 2
        ]);
        
        DB::table('hospital_times')->insert([
            'monday_start' => '10:00',  
            'monday_end' => '19:00', 
            'tuesday_start' => '10:00',  
            'tuesday_end' => '19:00',  
            'wednesday_start' => '10:00',  
            'wednesday_end' => '19:00', 
            'thursday_start' => '10:00', 
            'thursday_end' => '19:00', 
            'friday_start' => '10:00', 
            'friday_end' => '19:00', 
            'saturday_start' => '10:00', 
            'saturday_end' => '19:00', 
            'sunday_start' => '10:00', 
            'sunday_end' => '19:00', 
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
            'hospital_id' => 3
        ]);
        
        DB::table('hospital_times')->insert([
            'monday_start' => '9:00',  
            'monday_end' => '19:00', 
            'tuesday_start' => '休診',  
            'tuesday_end' => '休診',  
            'wednesday_start' => '9:00',  
            'wednesday_end' => '19:00', 
            'thursday_start' => '9:00', 
            'thursday_end' => '19:00', 
            'friday_start' => '9:00', 
            'friday_end' => '19:00', 
            'saturday_start' => '9:00', 
            'saturday_end' => '19:00', 
            'sunday_start' => '9:00', 
            'sunday_end' => '19:00', 
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
            'hospital_id' => 4
        ]);
    }
}
