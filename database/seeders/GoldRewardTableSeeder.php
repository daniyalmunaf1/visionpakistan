<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\GoldReward;

class GoldRewardTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GoldReward::truncate();
        GoldReward::create([
            'level' => 1,
            'score' => 35,
            'reward' => 7000,
        ]);
        GoldReward::create([
            'level' => 2,
            'score' => 110,
            'reward' => 25000,
        ]);
        GoldReward::create([
            'level' => 3,
            'score' => 320,
            'reward' => 35000,
        ]);
        GoldReward::create([
            'level' => 4,
            'score' => 750,
            'reward' => 50000,
        ]);
        GoldReward::create([
            'level' => 5,
            'score' => 1600,
            'reward' => 80000,
        ]);
        GoldReward::create([
            'level' => 6,
            'score' => 3600,
            'reward' => 150000,
        ]);
        GoldReward::create([
            'level' => 7,
            'score' => 7200,
            'reward' => 250000,
        ]);
        GoldReward::create([
            'level' => 8,
            'score' => 21000,
            'reward' => 1200000,
        ]);
        GoldReward::create([
            'level' => 9,
            'score' => 36000,
            'reward' => 1500000,
        ]);
        GoldReward::create([
            'level' => 10,
            'score' => 95000,
            'reward' => 3500000,
        ]);
    }
}
