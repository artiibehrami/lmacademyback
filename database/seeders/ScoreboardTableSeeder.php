<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ScoreboardTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('scoreboard')->insert([
            ['user_id' => 1, 'score' => 1200, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 2, 'score' => 1500, 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 3, 'score' => 1800, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
