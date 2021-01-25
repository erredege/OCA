<?php

namespace Database\Seeders;

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

        DB::table('users')->insert([
            'email' => 'jose@gmail.com',
            'password' => '123',
            'type' => '2',
            'score' => '500',
        ]);

        DB::table('users')->insert([
            'email' => 'ana@gmail.com',
            'password' => '123',
            'type' => '2',
            'score' => '500',
        ]);
    }
}
