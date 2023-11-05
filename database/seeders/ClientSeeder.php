<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('clients')->insert([
        'email' => 'abc@gmail.com',
        'password' => 'abcd1234',
        'created_at' => new DateTime,
        'updated_at' => new DateTime
        ]);
        
        DB::table('clients')->insert([
        'email' => 'def@gmail.com',
        'password' => 'efgh5678',
        'created_at' => new DateTime,
        'updated_at' => new DateTime,
        ]);
    }
}
