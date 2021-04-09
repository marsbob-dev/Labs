<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jobs')->insert([
            [
                'name' => 'CEO'
            ],
            [
                'name' => 'Project Manager'
            ],
            [
                'name' => 'Digital Designer'
            ],
            [
                'name' => 'Developer'
            ],
            [
                'name' => 'Motherfucker'
            ],
        ]);
    }
}
