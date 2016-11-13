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
        factory('App\User')->create([
            'email'     =>  'mobile-admin@mikyanidist.com',
            'password'  =>  bcrypt('demo1.'),
            'name'      =>  'Admin',
        ]);

        factory('App\User')->create([
            'email'     =>  'enriquerguezs@hotmail.com',
            'password'  =>  bcrypt('demo1.'),
            'name'      =>  'Enrique',
            'last_name' =>  'Rodriguez',
            'level'     =>  1,
        ]);
    }
}