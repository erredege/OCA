<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ThemeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('themes')->insert([
            'name' => 'tema_1',
            'theme_img' => '',
            'position_X' => '1',
            'position_Y' => '5000',
        ]);

        DB::table('themes')->insert([
            'name' => 'tema_2',
            'theme_img' => '',
            'position_X' => '500',
            'position_Y' => '5000',
        ]);

        DB::table('themes')->insert([
            'name' => 'tema_3',
            'theme_img' => '',
            'position_X' => '80',
            'position_Y' => '5000',
        ]);
    }
}
