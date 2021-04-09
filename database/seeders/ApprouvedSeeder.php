<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ApprouvedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('approuveds')->insert([
            [
                'worker_id' => 1
            ],
            [
                'worker_id' => 2
            ],
            [
                'worker_id' => 3
            ],
            [
                'worker_id' => 4
            ],
            [
                'worker_id' => 5
            ],
        ]);
    }
}
