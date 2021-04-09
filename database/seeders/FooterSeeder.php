<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('footers')->insert([
            [
                'span1' => '2017 All rights reserved. Designed by ',
                'span2' => 'Colorlib',
                'url' => 'https://colorlib.com',
            ],
        ]);
    }
}
