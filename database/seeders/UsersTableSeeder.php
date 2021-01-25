<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'email' => 'rosen@gmail.com',
            'password' => '123',
            'type' => '1',
            'score' => '5000',
        ]);

        DB::table('users')->insert([
            'email' => 'ivan@gmail.com',
            'password' => '123',
            'type' => '1',
            'score' => '5000',
        ]);

        DB::table('users')->insert([
            'email' => 'pablo@gmail.com',
            'password' => '123',
            'type' => '1',
            'score' => '5000',
        ]);

    }
}
