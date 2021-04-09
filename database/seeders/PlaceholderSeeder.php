<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlaceholderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('placeholders')->insert([
            [
                'name' => 'Your name',
                'email' => 'Your email',
                'message' => 'Message',
                'btn' => 'send',
            ]
        ]);
    }
}
