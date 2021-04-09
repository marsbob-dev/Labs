<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PictureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pictures')->insert([
            [
                'src' => 'default-user.png'
            ],
            [
                'src' => '1.jpg'
            ],
            [
                'src' => '2.jpg'
            ],
            [
                'src' => '3.jpg'
            ],
            [
                'src' => '4.jpg'
            ],
            [
                'src' => '5.jpg'
            ],
        ]);
    }
}
