<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MultimediaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('multimedia')->insert([
            'name' => 'video',
            'description' => 'archivo de video',
            'url' => 'dsfvfdbgthtyj',
            'type' => '0',
        ]);

        DB::table('multimedia')->insert([
            'name' => 'audio',
            'description' => 'archivo de audio',
            'url' => 'dsfsdvdfgdfsbdfb',
            'type' => '1',
        ]);

        DB::table('multimedia')->insert([
            'name' => 'imagen',
            'description' => 'archivo de imagen',
            'url' => 'sdfvdgbvsedfgbtrb',
            'type' => '2',
        ]);
    }
}
