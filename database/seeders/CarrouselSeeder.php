<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarrouselSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('carrousels')->insert([
            [
                'src' => '01.jpg',
                'paragraph' => 'Get your freebie template now!',
                'main' => 0
            ],
            [
                'src' => '02.jpg',
                'paragraph' => 'Get your freebie template now!',
                'main' => 0
            ],
        ]);
    }
}
