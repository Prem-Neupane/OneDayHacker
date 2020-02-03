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
            'bio'=> '<p><em>Rodney Erickson is a content marketing professional at HubSpot, an inbound marketing and sales platform that helps companies attract visitors, convert leads, and close customers. Previously, Rodney worked as a marketing manager for a tech software startup. He graduated with honors from Columbia University with a dual degree in Business Administration and Creative Writing.</em></p>',
            'image'=> 'http://127.0.0.1:8000/frontend/img/guide2.png'

        ]);
    }
}
