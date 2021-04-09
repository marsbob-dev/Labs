<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('phones')->insert([
            [
                'title' => 'Get in (the Lab) and  discover the world',
                'src' => 'device.png',
                'btn' => 'Browse',
                'btnLink' => '#cardSection',
            ],
        ]);
    }
}
