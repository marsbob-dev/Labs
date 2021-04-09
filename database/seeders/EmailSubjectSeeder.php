<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmailSubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('email_subjects')->insert([
            [
                'subject' => 'Quotation',
            ],
            [
                'subject' => 'Question about our services',
            ],
            [
                'subject' => 'Query',
            ],
        ]);
    }
}
