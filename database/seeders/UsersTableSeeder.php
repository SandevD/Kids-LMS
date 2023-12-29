<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'school_branch_id' => NULL,
                'grade_id' => NULL,
                'name' => 'Zuse Web Team',
                'email' => 'sandev.net@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Rto7XsD2isgN5FJh0yRm0eRvzDlnUD/ySW.fG4cXcx.JznyYfh5ai',
                'remember_token' => NULL,
                'status' => 1,
                'created_by' => NULL,
                'updated_by' => NULL,
                'created_at' => '2023-08-28 06:43:11',
                'updated_at' => '2023-08-28 06:43:11',
            ),
            1 => 
            array (
                'id' => 2,
                'school_branch_id' => 1,
                'grade_id' => 1,
                'name' => 'Avishka Bro',
                'email' => 'avishka@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$tA4PgHID3Qa2jPxaoNm6ceTMSoWr1YgPPaO4uUlyLTwtyuqhYeXha',
                'remember_token' => NULL,
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => '2023-09-27 09:35:41',
                'updated_at' => '2023-09-27 09:35:41',
            ),
        ));
        
        
    }
}