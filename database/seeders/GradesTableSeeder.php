<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GradesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('grades')->delete();
        
        \DB::table('grades')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Grade 1',
                'created_at' => '2023-09-22 15:33:59',
                'updated_at' => '2023-09-22 15:33:59',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Grade 2',
                'created_at' => '2023-09-22 15:34:10',
                'updated_at' => '2023-09-22 15:34:10',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Grade 3',
                'created_at' => '2023-09-22 15:34:26',
                'updated_at' => '2023-09-22 15:34:26',
            ),
        ));
        
        
    }
}