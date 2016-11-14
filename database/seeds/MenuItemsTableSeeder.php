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
            'name'              => '¿Qué es Mercadeo?',
            'key'               => '',
            'icon'              => 'language',
            'menu_group_id'     => '1',
            'order'             => '1',
            'created_at'        => date('Y-m-d H:i:s'),
            'updated_at'        => date('Y-m-d H:i:s')
        ]);

        DB::table('menu_items')->insert([
            'name'              => '¿Qué es Kyani?',
            'key'               => '',
            'icon'              => 'send',
            'menu_group_id'     => '2',
            'order'             => '1',
            'created_at'        => date('Y-m-d H:i:s'),
            'updated_at'        => date('Y-m-d H:i:s')
        ]);

        DB::table('menu_items')->insert([
            'name'              => 'Oportunidad',
            'key'               => '',
            'icon'              => 'trending_up',
            'menu_group_id'     => '2',
            'order'             => '2',
            'created_at'        => date('Y-m-d H:i:s'),
            'updated_at'        => date('Y-m-d H:i:s')
        ]);

        DB::table('menu_items')->insert([
            'name'              => 'Producto',
            'key'               => '',
            'icon'              => 'shopping_basket',
            'menu_group_id'     => '2',
            'order'             => '3',
            'created_at'        => date('Y-m-d H:i:s'),
            'updated_at'        => date('Y-m-d H:i:s')
        ]);

        DB::table('menu_items')->insert([
            'name'              => '¿Tienes dudas?',
            'key'               => 'contact_form',
            'icon'              => 'speaker_notes',
            'menu_group_id'     => '2',
            'order'             => '4',
            'created_at'        => date('Y-m-d H:i:s'),
            'updated_at'        => date('Y-m-d H:i:s')
        ]);

        DB::table('menu_items')->insert([
            'name'              => 'Lista de prospectación',
            'key'               => '',
            'icon'              => 'reorder',
            'menu_group_id'     => '3',
            'order'             => '1',
            'created_at'        => date('Y-m-d H:i:s'),
            'updated_at'        => date('Y-m-d H:i:s')
        ]);

        DB::table('menu_items')->insert([
            'name'              => 'Prospectación',
            'key'               => '',
            'icon'              => 'reorder',
            'menu_group_id'     => '3',
            'order'             => '2',
            'created_at'        => date('Y-m-d H:i:s'),
            'updated_at'        => date('Y-m-d H:i:s')
        ]);

        DB::table('menu_items')->insert([
            'name'              => 'Tutoriales para el seguimeinto y ...',
            'key'               => '',
            'icon'              => 'reorder',
            'menu_group_id'     => '3',
            'order'             => '3',
            'created_at'        => date('Y-m-d H:i:s'),
            'updated_at'        => date('Y-m-d H:i:s')
        ]);
    }
}
