<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SchoolBranchesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('school_branches')->delete();
        
        \DB::table('school_branches')->insert(array (
            0 => 
            array (
                'id' => 1,
                'school_id' => 1,
                'name' => 'Lyceum Nugegoda',
                'created_at' => '2023-09-22 15:48:15',
                'updated_at' => '2023-09-22 15:48:15',
            ),
        ));
        
        
    }
}