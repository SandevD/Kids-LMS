<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SubjectsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('subjects')->delete();
        
        \DB::table('subjects')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Science',
                'created_at' => '2023-09-22 15:35:57',
                'updated_at' => '2023-09-22 15:35:57',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Maths',
                'created_at' => '2023-09-22 15:36:09',
                'updated_at' => '2023-09-22 15:36:09',
            ),
        ));
        
        
    }
}