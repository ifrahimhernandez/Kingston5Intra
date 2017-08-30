<?php

use Illuminate\Database\Seeder;

class CrewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('crews')->insert([
           
            
            'name' => 'Juan Carlos',
            'crew_title' => 'Photographer',
            'address' => '520 w 25 st',
            'phone' => rand(1000000000, 9999999999),
            'driver_license' => rand(1000000000, 9999999999),
            'social_security' => rand(100000000, 999999999),
            'i9_number' => rand(),
            'resume' => str_random(10).'pdf',
            'imdb_experience' => 'YES',
            'w2_employee' => 'NO',
            'emergency_contact' => rand(1000000000, 9999999999),
            'Union' => 'YES',
            
        ]);
        
         DB::table('crews')->insert([
           
            
            'name' => 'Gloria Martinez',
            'crew_title' => 'Actor',
            'address' => '8520 E Drive st',
            'phone' => rand(1000000000, 9999999999),
            'driver_license' => rand(1000000000, 9999999999),
            'social_security' => rand(100000000, 999999999),
            'i9_number' => rand(),
            'resume' => str_random(10).'pdf',
            'imdb_experience' => 'YES',
            'w2_employee' => 'NO',
            'emergency_contact' => rand(1000000000, 9999999999),
            'Union' => 'YES',
            
        ]);
    }
}
