<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            [
                'name' => 'Michael Smith ',
                'email' => 'test@test',
                'content' => 'Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.',
                'post_id' => 1,
                'picture_id' => 1,
                'approuved' => true
            ],
            [
                'name' => 'Michael Smith ',
                'email' => 'test@test',
                'content' => 'Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.',
                'post_id' => 1,
                'picture_id' => 1,
                'approuved' => true
            ],
            [
                'name' => 'Michael Smith ',
                'email' => 'test@test',
                'content' => 'Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.',
                'post_id' => 2,
                'picture_id' => 1,
                'approuved' => true
            ],
            [
                'name' => 'Michael Smith ',
                'email' => 'test@test',
                'content' => 'Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.',
                'post_id' => 2,
                'picture_id' => 1,
                'approuved' => true
            ],
            [
                'name' => 'Michael Smith ',
                'email' => 'test@test',
                'content' => 'Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.',
                'post_id' => 2,
                'picture_id' => 1,
                'approuved' => true
            ],
            [
                'name' => 'Michael Smith ',
                'email' => 'test@test',
                'content' => 'Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.',
                'post_id' => 3,
                'picture_id' => 1,
                'approuved' => true
            ],
            [
                'name' => 'Michael Smith ',
                'email' => 'test@test',
                'content' => 'Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.',
                'post_id' => 4,
                'picture_id' => 1,
                'approuved' => true
            ],
            [
                'name' => 'Michael Smith ',
                'email' => 'test@test',
                'content' => 'Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.',
                'post_id' => 4,
                'picture_id' => 1,
                'approuved' => true
            ],
            [
                'name' => 'Michael Smith ',
                'email' => 'test@test',
                'content' => 'Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.',
                'post_id' => 5,
                'picture_id' => 1,
                'approuved' => true
            ],
            [
                'name' => 'Michael Smith ',
                'email' => 'test@test',
                'content' => 'Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.',
                'post_id' => 5,
                'picture_id' => 1,
                'approuved' => true
            ],
            [
                'name' => 'Michael Smith ',
                'email' => 'test@test',
                'content' => 'Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.',
                'post_id' => 5,
                'picture_id' => 1,
                'approuved' => true
            ],
        ]);
    }
}
