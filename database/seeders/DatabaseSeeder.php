<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            PictureSeeder::class,
            RoleSeeder::class,
            JobSeeder::class,
            UserSeeder::class,
            IconSeeder::class,
            CarrouselSeeder::class,
            TestimonialSeeder::class,
            WitnessSeeder::class,
            ServicesSeeder::class,
            TeamSeeder::class,
            StandSeeder::class,
            ContactSeeder::class,
            PlaceholderSeeder::class,
            FooterSeeder::class,
            ResourceSeeder::class,
            PhoneSeeder::class,
            NewsletterSeeder::class,
            MapSeeder::class,
            CategorySeeder::class,
            SearchSeeder::class,
            BlogSeeder::class,
            EmailSubjectSeeder::class,
            IntroductionSeeder::class,
            LogoSeeder::class,
            NavSeeder::class,
            PostSeeder::class,
            TagSeeder::class,
            PostTagSeeder::class,
            CommentSeeder::class
        ]);
    }
}
