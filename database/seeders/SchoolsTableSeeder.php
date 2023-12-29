<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SchoolsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('schools')->delete();
        
        \DB::table('schools')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Lyceum International School',
                'created_at' => '2023-09-22 15:47:47',
                'updated_at' => '2023-09-22 15:47:56',
            ),
        ));
        
        
    }
}