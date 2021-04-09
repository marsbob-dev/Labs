<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Williams',
                'surname' => 'Christinne',
                'email' => '1@1.com',
                'job_id' => '1',
                'role_id' => '1',
                'photo_id' => 3,
                'description' => 'Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.',
                'password' => Hash::make('test'),
                'approuved' => true
            ],
            [
                'name' => 'Doe',
                'surname' => 'John',
                'email' => '2@2.com',
                'job_id' => '2',
                'role_id' => '2',
                'photo_id' => 4,
                'description' => 'Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.',
                'password' => Hash::make('test'),
                'approuved' => true
            ],
            [
                'name' => 'Burnham',
                'surname' => 'Michael',
                'email' => '3@3.com',
                'job_id' => '3',
                'role_id' => '3',
                'photo_id' => 2,
                'description' => 'Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.',
                'password' => Hash::make('test'),
                'approuved' => true
            ],
            [
                'name' => 'I DARE',
                'surname' => 'YOU',
                'email' => '4@4.com',
                'job_id' => '5',
                'role_id' => '2',
                'photo_id' => 5,
                'description' => 'Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.',
                'password' => Hash::make('test'),
                'approuved' => true
            ],
            [
                'name' => 'Michel',
                'surname' => 'Zordoz',
                'email' => '5@5.com',
                'job_id' => '4',
                'role_id' => '4',
                'photo_id' => 6,
                'description' => 'Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.',
                'password' => Hash::make('test'),
                'approuved' => true
            ]
        ]);
    }
}
