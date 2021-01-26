<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnswersMultiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('answers_multi')->insert([
            'text' => 'hjghkghkghkdghkghkghk',
            'true' => 'aaa',
            'question_id' => '1',
        ]);

        DB::table('answers_multi')->insert([
            'text' => 'hkghkgkdkdnghsfdgs',
            'true' => 'bbb',
            'question_id' => '1',
        ]);
    }
}
