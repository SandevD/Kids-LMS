<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RolesTableSeeder::class);
        $this->call(GradesTableSeeder::class);
        $this->call(SubjectsTableSeeder::class);
        $this->call(SchoolsTableSeeder::class);
        $this->call(SchoolBranchesTableSeeder::class);
        $this->call(LessonsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(RoleUserTableSeeder::class);
        $this->call(RolePermissionTableSeeder::class);
    }
}
