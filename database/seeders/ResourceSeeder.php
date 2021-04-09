<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('resources')->insert([
            [
                'icon_id' => 23,
                'title' => 'Get in the lab',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            ],
            [
                'icon_id' => 11,
                'title' => 'Projects online',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            ],
            [
                'icon_id' => 37,
                'title' => 'SMART MARKETING',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            ],
            [
                'icon_id' => 39,
                'title' => 'Social Media',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            ],
            [
                'icon_id' => 36,
                'title' => 'Brainstorming',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            ],
            [
                'icon_id' => 26,
                'title' => 'Documented',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            ],
            [
                'icon_id' => 18,
                'title' => 'Responsive',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            ],
            [
                'icon_id' => 43,
                'title' => 'Retina ready',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            ],
            [
                'icon_id' => 12,
                'title' => 'Ultra modern',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            ],
            [
                'icon_id' => 3,
                'title' => 'Fast Response',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            ],
            [
                'icon_id' => 2,
                'title' => 'Quick Learning',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            ],
            [
                'icon_id' => 5,
                'title' => 'Easily find',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            ],
            [
                'icon_id' => 6,
                'title' => 'On Your Own',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            ],
            [
                'icon_id' => 13,
                'title' => 'Accountable',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            ],
            [
                'icon_id' => 10,
                'title' => 'Flashy',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            ],
            [
                'icon_id' => 34,
                'title' => 'The Grande Cactus',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            ],
            [
                'icon_id' => 36,
                'title' => 'Plus Ultra',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            ],
            [
                'icon_id' => 42,
                'title' => 'Main Title',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            ],
            [
                'icon_id' => 50,
                'title' => 'Resources',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            ]
        ]);
    }
}
