<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SilverReward;

class SilverRewardTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SilverReward::truncate();
        SilverReward::create([
            'level' => 1,
            'score' => 45,
            'reward' => 2500,
        ]);
        SilverReward::create([
            'level' => 2,
            'score' => 300,
            'reward' => 25000,
        ]);
        SilverReward::create([
            'level' => 3,
            'score' => 2000,
            'reward' => 35000,
        ]);
        SilverReward::create([
            'level' => 4,
            'score' => 5000,
            'reward' => 40000,
        ]);
        SilverReward::create([
            'level' => 5,
            'score' => 10000,
            'reward' => 75000,
        ]);
        SilverReward::create([
            'level' => 6,
            'score' => 20000,
            'reward' => 150000,
        ]);
        SilverReward::create([
            'level' => 7,
            'score' => 32000,
            'reward' => 250000,
        ]);
        SilverReward::create([
            'level' => 8,
            'score' => 52000,
            'reward' => 500000,
        ]);
        SilverReward::create([
            'level' => 9,
            'score' => 90000,
            'reward' => 1000000,
        ]);
        SilverReward::create([
            'level' => 10,
            'score' => 150000,
            'reward' => 2000000,
        ]);
    }
}
