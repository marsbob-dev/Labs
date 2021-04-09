<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            [
                'title' => '(Get in the Lab) and see the services',
                'btn' => 'Browse',
                'btnLink' => '/services',
            ],
        ]);
    }
}
