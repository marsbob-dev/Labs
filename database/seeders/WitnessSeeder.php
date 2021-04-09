<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WitnessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('witnesses')->insert([
            [
                'name' => 'Smith',
                'surname' => 'Michael',
                'job' => 'CEO Company',
                'src' => '01.jpg',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
            ],[
                'name' => 'Smith',
                'surname' => 'Michael',
                'job' => 'CEO Company',
                'src' => '02.jpg',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
            ],[
                'name' => 'Smith',
                'surname' => 'Michael',
                'job' => 'CEO Company',
                'src' => '01.jpg',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
            ],[
                'name' => 'Smith',
                'surname' => 'Michael',
                'job' => 'CEO Company',
                'src' => '02.jpg',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
            ],[
                'name' => 'Smith',
                'surname' => 'Michael',
                'job' => 'CEO Company',
                'src' => '01.jpg',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
            ],[
                'name' => 'Smith',
                'surname' => 'Michael',
                'job' => 'CEO Company',
                'src' => '02.jpg',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
            ]
        ]);
    }
}
