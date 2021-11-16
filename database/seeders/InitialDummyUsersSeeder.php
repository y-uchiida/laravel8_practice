<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class InitialDummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'user001',
                'email' => 'user001@example.com',
                'password' => Hash::make('user001@example.com')
            ],
            [
                'name' => 'user002',
                'email' => 'user002@example.com',
                'password' => Hash::make('user002@example.com')
            ],
            [
                'name' => 'user003',
                'email' => 'user003@example.com',
                'password' => Hash::make('user003@example.com')
            ],
        ]);
    }
}
