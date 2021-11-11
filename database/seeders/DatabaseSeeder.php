<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(TeachersTableSeeder::class);
        $this->call(HomeroomsTableSeeder::class);
        $this->call(StudentsTableSeeder::class);
        $this->call(SubjectsTableSeeder::class);
        $this->call(StudentSubjectTableSeeder::class);
    }
}
