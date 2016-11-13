<?php

use Illuminate\Database\Seeder;

class MenuGroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menu_groups')->insert([
            'name'         => 'Grupo 1',
            'description'           => 'https://www.youtube.com/watch?v=bYGMH1mTrKg',
            'visible_for'   => 'client',
        ]);
    }
}
