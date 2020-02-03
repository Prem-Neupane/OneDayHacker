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
            'name' => 'Prem Neupane',
            'email' => 'premneupane@admin.com',
            'password' => bcrypt('12345678'),

            'role' => 'guide',
            'language' =>'nepali,english,spanish ',
            'location' => 'butwal',
            'dob' => '1996-05-12',
            'image'=> 'http://127.0.0.1:8000/frontend/img/guide2.png'

        ]);
    }
}
