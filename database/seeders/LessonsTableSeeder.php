<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LessonsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('lessons')->delete();
        
        \DB::table('lessons')->insert(array (
            0 => 
            array (
                'id' => 1,
                'subject_id' => 1,
                'grade_id' => 1,
                'name' => 'Photosynthesis',
                'created_at' => '2023-09-25 16:02:34',
                'updated_at' => '2023-09-25 16:02:34',
            ),
        ));
        
        
    }
}