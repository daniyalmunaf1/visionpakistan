<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TeamUser;

class TeamUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TeamUser::truncate();
        TeamUser::create([
            'email' => 'silver@user.com',
            'ref1' => 'silver1@user.com',
            'ref2' => 'silver2@user.com',
            'ref3' => 'silver3@user.com',
            'score1' => 0,
            'score2' => 0,
            'score3' => 0,
            'level' => 1,
            'status' => 0,
        ]);
        TeamUser::create([
            'email' => 'silver1@user.com',
            'ref1' => 'silver11@user.com',
            'ref2' => 'silver12@user.com',
            'ref3' => 'silver13@user.com',
            'score1' => 0,
            'score2' => 0,
            'score3' => 0,
            'level' => 1,
            'status' => 0,
        ]);
        TeamUser::create([
            'email' => 'silver2@user.com',
            'ref1' => 'silver21@user.com',
            'ref2' => 'silver22@user.com',
            'ref3' => 'silver23@user.com',
            'score1' => 0,
            'score2' => 0,
            'score3' => 0,
            'level' => 1,
            'status' => 0,
        ]);
        TeamUser::create([
            'email' => 'silver3@user.com',
            'ref1' => 'silver31@user.com',
            'ref2' => 'silver32@user.com',
            'ref3' => 'silver33@user.com',
            'score1' => 0,
            'score2' => 0,
            'score3' => 0,
            'level' => 1,
            'status' => 0,
        ]);
        TeamUser::create([
            'email' => 'gold@user.com',
            'ref1' => 'gold1@user.com',
            'ref2' => 'gold2@user.com',
            'ref3' => 'gold3@user.com',
            'score1' => 0,
            'score2' => 0,
            'score3' => 0,
            'level' => 1,
            'status' => 0,
        ]);
        TeamUser::create([
            'email' => 'gold1@user.com',
            'ref1' => 'gold11@user.com',
            'ref2' => 'gold12@user.com',
            'ref3' => 'gold13@user.com',
            'score1' => 0,
            'score2' => 0,
            'score3' => 0,
            'level' => 1,
            'status' => 0,
        ]);
        TeamUser::create([
            'email' => 'gold2@user.com',
            'ref1' => 'gold21@user.com',
            'ref2' => 'gold22@user.com',
            'ref3' => 'gold23@user.com',
            'score1' => 0,
            'score2' => 0,
            'score3' => 0,
            'level' => 1,
            'status' => 0,
        ]);
        TeamUser::create([
            'email' => 'gold3@user.com',
            'ref1' => 'gold31@user.com',
            'ref2' => 'gold32@user.com',
            'ref3' => 'gold33@user.com',
            'score1' => 0,
            'score2' => 0,
            'score3' => 0,
            'level' => 1,
            'status' => 0,
        ]);
        TeamUser::create([
            'email' => 'gold11@user.com',
            'ref1' => 'gold111@user.com',
            'ref2' => 'gold112@user.com',
            'ref3' => 'gold113@user.com',
            'score1' => 0,
            'score2' => 0,
            'score3' => 0,
            'level' => 1,
            'status' => 0,
        ]);
    }
}
