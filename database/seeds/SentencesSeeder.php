<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SentencesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sentences')->insert([
            'sentence' => "volservers.com",
            'matrix' => 2,
            'color' => "gray"
        ]);
        DB::table('sentences')->insert([
            'sentence' => "Build Trust",
            'matrix' => 4,
            'color' => "gray"
        ]);

        DB::table('sentences')->insert([
            'sentence' => "B2B Marketplace",
            'matrix' => 9,
            'color' => "gray"
        ]);

        DB::table('sentences')->insert([
            'sentence' => "Saas Enabled Marketplace",
            'matrix' => 11,
            'color' => "gray"
        ]);

        DB::table('sentences')->insert([
            'sentence' => "Provide Transparency",
            'matrix' => 16,
            'color' => "gray"
        ]);
    }
}
