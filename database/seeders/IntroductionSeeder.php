<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IntroductionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('introductions')->insert([
            [
                'title' => 'Get in the (Lab) and discover the world',
                'p1' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequat ante ac congue. Quisque porttitor porttitor tempus. Donec maximus ipsum non ornare vporttitor porttitorestibulum. Sed libero nibh, feugiat at enim id, bibendum sollicitudin arcu.',
                'p2' => 'Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum. Nam convallis vel erat id dictum. Sed ut risus in orci convallis viverra a eget nisi. Aenean pellentesque elit vitae eros dignissim ultrices. Quisque porttitor porttitorlaoreet vel risus et luctus.',
                'url' => 'https://www.youtube.com/watch?v=JgHfx2v9zOU',
                'src' => 'video.jpg',
                'btn' => 'Browse',
                'btnLink' => '#teamSection',
            ],
        ]);
    }
}
