<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stands')->insert([
            [
                'title' => 'Are you ready to stand out?',
                'paragraph' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est.'
            ],
        ]);
    }
}
