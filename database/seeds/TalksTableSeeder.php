<?php

use Illuminate\Database\Seeder;

class TalksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('talks')->insert([
            'title' => "HEllo",
            'body' => "abcdefg",
            'user_id' => 1,
        ]);
    }
}
