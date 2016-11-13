<?php

use Illuminate\Database\Seeder;

class MenuItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menu_items')->insert([
            'name'         => 'Item 1',
            'description'           => 'https://www.youtube.com/watch?v=bYGMH1mTrKg',
            'menu_group_id'   => '1',
            'order'   => '1',
        ]);
    }
}
