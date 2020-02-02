<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('12345678'),

            'role' => 'guide',
            'language' =>'nepali,english ',
            'location' => 'butwal',
            'dob' => '1996-05-12',
        ]);
    }
}
