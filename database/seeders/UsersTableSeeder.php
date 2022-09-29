<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();

        $adminRole = Role::where('name','admin')->first();
        $silverRole = Role::where('name','silver')->first();
        $goldRole = Role::where('name','gold')->first();


        $admin = User::create([
            'name' => 'Admin',
            'number' => '03090888023',
            'accountname' => 'Hafiz Asim',
            'bankname' => 'EasyPaisa',
            'team_bonus' => 0,
            'current_income' => 0,
            'reward_income' => 0,
            'total_income' => 0,
            'level' => 1,
            'email' => 'admin@admin.com',
            'password' => Hash::make('qwertyuiop'),
            'email_verified_at' => '2022-08-19 18:34:11',
            'deactivate' => 0,            'lastuseradded' => '2022-09-16 18:34:11'        ]);
        $silver = User::create([
            'name' => 'Silver User',
            'number' => '03123456789',
            'accountname' => 'Silver User',
            'bankname' => 'EasyPaisa',
            'team_bonus' => 0,
            'current_income' => 0,
            'reward_income' => 0,
            'total_income' => 0,
            'level' => 1,
            'score' => 0,
            'target' => 45,
            'email' => 'silver@user.com',
            'password' => Hash::make('qwertyuiop'),
            'email_verified_at' => '2022-08-19 18:34:11',
            'deactivate' => 0,            'lastuseradded' => '2022-09-16 18:34:11'        ]);
        $silver1 = User::create([
            'name' => 'Silver User1',
            'number' => '03123456789',
            'accountname' => 'SilverUser',
            'bankname' => 'EasyPaisa',
            'team_bonus' => 0,
            'current_income' => 0,
            'reward_income' => 0,
            'total_income' => 0,
            'level' => 1,
            'score' => 0,
            'target' => 45,
            'email' => 'silver1@user.com',
            'ref_email' => 'silver@user.com',
            'password' => Hash::make('qwertyuiop'),
            'email_verified_at' => '2022-08-19 18:34:11',
            'deactivate' => 0,            'lastuseradded' => '2022-09-16 18:34:11'        ]);
        $silver2 = User::create([
            'name' => 'Silver User2',
            'number' => '03123456789',
            'accountname' => 'SilverUser',
            'bankname' => 'EasyPaisa',
            'team_bonus' => 0,
            'current_income' => 0,
            'reward_income' => 0,
            'total_income' => 0,
            'level' => 1,
            'score' => 0,
            'target' => 45,
            'email' => 'silver2@user.com',
            'ref_email' => 'silver@user.com',
            'password' => Hash::make('qwertyuiop'),
            'email_verified_at' => '2022-08-19 18:34:11',
            'deactivate' => 0,            'lastuseradded' => '2022-09-16 18:34:11'        ]);
        $silver3 = User::create([
            'name' => 'Silver User3',
            'number' => '03123456789',
            'accountname' => 'SilverUser',
            'bankname' => 'EasyPaisa',
            'team_bonus' => 0,
            'current_income' => 0,
            'reward_income' => 0,
            'total_income' => 0,
            'level' => 1,
            'score' => 0,
            'target' => 45,
            'email' => 'silver3@user.com',
            'ref_email' => 'silver@user.com',
            'password' => Hash::make('qwertyuiop'),
            'email_verified_at' => '2022-08-19 18:34:11',
            'deactivate' => 0,            'lastuseradded' => '2022-09-16 18:34:11'        ]);
        $silver4 = User::create([
            'name' => 'Silver User11',
            'number' => '03123456789',
            'accountname' => 'SilverUser',
            'bankname' => 'EasyPaisa',
            'team_bonus' => 0,
            'current_income' => 0,
            'reward_income' => 0,
            'total_income' => 0,
            'level' => 1,
            'score' => 0,
            'target' => 45,
            'email' => 'silver11@user.com',
            'ref_email' => 'silver1@user.com',
            'password' => Hash::make('qwertyuiop'),
            'email_verified_at' => '2022-08-19 18:34:11',
            'deactivate' => 0,            'lastuseradded' => '2022-09-16 18:34:11'        ]);
        $silver5 = User::create([
            'name' => 'Silver User12',
            'number' => '03123456789',
            'accountname' => 'SilverUser',
            'bankname' => 'EasyPaisa',
            'team_bonus' => 0,
            'current_income' => 0,
            'reward_income' => 0,
            'total_income' => 0,
            'level' => 1,
            'score' => 0,
            'target' => 45,
            'email' => 'silver12@user.com',
            'ref_email' => 'silver1@user.com',
            'password' => Hash::make('qwertyuiop'),
            'email_verified_at' => '2022-08-19 18:34:11',
            'deactivate' => 0,            'lastuseradded' => '2022-09-16 18:34:11'        ]);
        $silver6 = User::create([
            'name' => 'Silver User13',
            'number' => '03123456789',
            'accountname' => 'SilverUser',
            'bankname' => 'EasyPaisa',
            'team_bonus' => 0,
            'current_income' => 0,
            'reward_income' => 0,
            'total_income' => 0,
            'level' => 1,
            'score' => 0,
            'target' => 45,
            'email' => 'silver13@user.com',
            'ref_email' => 'silver1@user.com',
            'password' => Hash::make('qwertyuiop'),
            'email_verified_at' => '2022-08-19 18:34:11',
            'deactivate' => 0,            'lastuseradded' => '2022-09-16 18:34:11'        ]);
        $silver7 = User::create([
            'name' => 'Silver User21',
            'number' => '03123456789',
            'accountname' => 'SilverUser',
            'bankname' => 'EasyPaisa',
            'team_bonus' => 0,
            'current_income' => 0,
            'reward_income' => 0,
            'total_income' => 0,
            'level' => 1,
            'score' => 0,
            'target' => 45,
            'email' => 'silver21@user.com',
            'ref_email' => 'silver2@user.com',
            'password' => Hash::make('qwertyuiop'),
            'email_verified_at' => '2022-08-19 18:34:11',
            'deactivate' => 0,            'lastuseradded' => '2022-09-16 18:34:11'        ]);
        $silver8 = User::create([
            'name' => 'Silver User22',
            'number' => '03123456789',
            'accountname' => 'SilverUser',
            'bankname' => 'EasyPaisa',
            'team_bonus' => 0,
            'current_income' => 0,
            'reward_income' => 0,
            'total_income' => 0,
            'level' => 1,
            'score' => 0,
            'target' => 45,
            'email' => 'silver22@user.com',
            'ref_email' => 'silver2@user.com',
            'password' => Hash::make('qwertyuiop'),
            'email_verified_at' => '2022-08-19 18:34:11',
            'deactivate' => 0,            'lastuseradded' => '2022-09-16 18:34:11'        ]);
        $silver9 = User::create([
            'name' => 'Silver User23',
            'number' => '03123456789',
            'accountname' => 'SilverUser',
            'bankname' => 'EasyPaisa',
            'team_bonus' => 0,
            'current_income' => 0,
            'reward_income' => 0,
            'total_income' => 0,
            'level' => 1,
            'score' => 0,
            'target' => 45,
            'email' => 'silver23@user.com',
            'ref_email' => 'silver2@user.com',
            'password' => Hash::make('qwertyuiop'),
            'email_verified_at' => '2022-08-19 18:34:11',
            'deactivate' => 0,            'lastuseradded' => '2022-09-16 18:34:11'        ]);
        $silver10 = User::create([
            'name' => 'Silver User31',
            'number' => '03123456789',
            'accountname' => 'SilverUser',
            'bankname' => 'EasyPaisa',
            'team_bonus' => 0,
            'current_income' => 0,
            'reward_income' => 0,
            'total_income' => 0,
            'level' => 1,
            'score' => 0,
            'target' => 45,
            'email' => 'silver31@user.com',
            'ref_email' => 'silver3@user.com',
            'password' => Hash::make('qwertyuiop'),
            'email_verified_at' => '2022-08-19 18:34:11',
            'deactivate' => 0,            'lastuseradded' => '2022-09-16 18:34:11'        ]);
        $silver11 = User::create([
            'name' => 'Silver User32',
            'number' => '03123456789',
            'accountname' => 'SilverUser',
            'bankname' => 'EasyPaisa',
            'team_bonus' => 0,
            'current_income' => 0,
            'reward_income' => 0,
            'total_income' => 0,
            'level' => 1,
            'score' => 0,
            'target' => 45,
            'email' => 'silver32@user.com',
            'ref_email' => 'silver3@user.com',
            'password' => Hash::make('qwertyuiop'),
            'email_verified_at' => '2022-08-19 18:34:11',
            'deactivate' => 0,            'lastuseradded' => '2022-09-16 18:34:11'        ]);
        $silver12 = User::create([
            'name' => 'Silver User33',
            'number' => '03123456789',
            'accountname' => 'SilverUser',
            'bankname' => 'EasyPaisa',
            'team_bonus' => 0,
            'current_income' => 0,
            'reward_income' => 0,
            'total_income' => 0,
            'level' => 1,
            'score' => 0,
            'target' => 45,
            'email' => 'silver33@user.com',
            'ref_email' => 'silver3@user.com',
            'password' => Hash::make('qwertyuiop'),
            'email_verified_at' => '2022-08-19 18:34:11',
            'deactivate' => 0,            'lastuseradded' => '2022-09-16 18:34:11'        ]);
        $gold = User::create([
            'name' => 'Gold User',
            'number' => '03123456789',
            'accountname' => 'GoldUser',
            'bankname' => 'EasyPaisa',
            'team_bonus' => 0,
            'current_income' => 0,
            'reward_income' => 0,
            'total_income' => 0,
            'level' => 1,
            'score' => 0,
            'target' => 35,
            'email' => 'gold@user.com',
            'password' => Hash::make('qwertyuiop'),
            'email_verified_at' => '2022-08-19 18:34:11',
            'deactivate' => 0,            'lastuseradded' => '2022-09-16 18:34:11'        ]);
        
        $gold1 = User::create([
            'name' => 'Gold User1',
            'number' => '03123456789',
            'accountname' => 'GoldUser',
            'bankname' => 'EasyPaisa',
            'team_bonus' => 0,
            'current_income' => 0,
            'reward_income' => 0,
            'total_income' => 0,
            'level' => 1,
            'score' => 0,
            'target' => 35,
            'email' => 'gold1@user.com',
            'ref_email' => 'gold@user.com',
            'password' => Hash::make('qwertyuiop'),
            'email_verified_at' => '2022-08-19 18:34:11',
            'deactivate' => 0,            'lastuseradded' => '2022-09-16 18:34:11'        ]);
        $gold2 = User::create([
            'name' => 'Gold User2',
            'number' => '03123456789',
            'accountname' => 'GoldUser',
            'bankname' => 'EasyPaisa',
            'team_bonus' => 0,
            'current_income' => 0,
            'reward_income' => 0,
            'total_income' => 0,
            'level' => 1,
            'score' => 0,
            'target' => 35,
            'email' => 'gold2@user.com',
            'ref_email' => 'gold@user.com',
            'password' => Hash::make('qwertyuiop'),
            'email_verified_at' => '2022-08-19 18:34:11',
            'deactivate' => 0,            'lastuseradded' => '2022-09-16 18:34:11'        ]);
        $gold3 = User::create([
            'name' => 'Gold User3',
            'number' => '03123456789',
            'accountname' => 'GoldUser',
            'bankname' => 'EasyPaisa',
            'team_bonus' => 0,
            'current_income' => 0,
            'reward_income' => 0,
            'total_income' => 0,
            'level' => 1,
            'score' => 0,
            'target' => 35,
            'email' => 'gold3@user.com',
            'ref_email' => 'gold@user.com',
            'password' => Hash::make('qwertyuiop'),
            'email_verified_at' => '2022-08-19 18:34:11',
            'deactivate' => 0,            'lastuseradded' => '2022-09-16 18:34:11'        ]);
        $gold4 = User::create([
            'name' => 'Gold User11',
            'number' => '03123456789',
            'accountname' => 'GoldUser',
            'bankname' => 'EasyPaisa',
            'team_bonus' => 0,
            'current_income' => 0,
            'reward_income' => 0,
            'total_income' => 0,
            'level' => 1,
            'score' => 0,
            'target' => 35,
            'email' => 'gold11@user.com',
            'ref_email' => 'gold1@user.com',
            'password' => Hash::make('qwertyuiop'),
            'email_verified_at' => '2022-08-19 18:34:11',
            'deactivate' => 0,            'lastuseradded' => '2022-09-16 18:34:11'        ]);
        $gold5 = User::create([
            'name' => 'Gold User12',
            'number' => '03123456789',
            'accountname' => 'GoldUser',
            'bankname' => 'EasyPaisa',
            'team_bonus' => 0,
            'current_income' => 0,
            'reward_income' => 0,
            'total_income' => 0,
            'level' => 1,
            'score' => 0,
            'target' => 35,
            'email' => 'gold12@user.com',
            'ref_email' => 'gold1@user.com',
            'password' => Hash::make('qwertyuiop'),
            'email_verified_at' => '2022-08-19 18:34:11',
            'deactivate' => 0,            'lastuseradded' => '2022-09-16 18:34:11'        ]);
        $gold6 = User::create([
            'name' => 'Gold User13',
            'number' => '03123456789',
            'accountname' => 'GoldUser',
            'bankname' => 'EasyPaisa',
            'team_bonus' => 0,
            'current_income' => 0,
            'reward_income' => 0,
            'total_income' => 0,
            'level' => 1,
            'score' => 0,
            'target' => 35,
            'email' => 'gold13@user.com',
            'ref_email' => 'gold1@user.com',
            'password' => Hash::make('qwertyuiop'),
            'email_verified_at' => '2022-08-19 18:34:11',
            'deactivate' => 0,            'lastuseradded' => '2022-09-16 18:34:11'        ]);
        $gold7 = User::create([
            'name' => 'Gold User21',
            'number' => '03123456789',
            'accountname' => 'GoldUser',
            'bankname' => 'EasyPaisa',
            'team_bonus' => 0,
            'current_income' => 0,
            'reward_income' => 0,
            'total_income' => 0,
            'level' => 1,
            'score' => 0,
            'target' => 35,
            'email' => 'gold21@user.com',
            'ref_email' => 'gold2@user.com',
            'password' => Hash::make('qwertyuiop'),
            'email_verified_at' => '2022-08-19 18:34:11',
            'deactivate' => 0,            'lastuseradded' => '2022-09-16 18:34:11'        ]);
        $gold8 = User::create([
            'name' => 'Gold User22',
            'number' => '03123456789',
            'accountname' => 'GoldUser',
            'bankname' => 'EasyPaisa',
            'team_bonus' => 0,
            'current_income' => 0,
            'reward_income' => 0,
            'total_income' => 0,
            'level' => 1,
            'score' => 0,
            'target' => 35,
            'email' => 'gold22@user.com',
            'ref_email' => 'gold2@user.com',
            'password' => Hash::make('qwertyuiop'),
            'email_verified_at' => '2022-08-19 18:34:11',
            'deactivate' => 0,            'lastuseradded' => '2022-09-16 18:34:11'        ]);
        $gold9 = User::create([
            'name' => 'Gold User23',
            'number' => '03123456789',
            'accountname' => 'GoldUser',
            'bankname' => 'EasyPaisa',
            'team_bonus' => 0,
            'current_income' => 0,
            'reward_income' => 0,
            'total_income' => 0,
            'level' => 1,
            'score' => 0,
            'target' => 35,
            'email' => 'gold23@user.com',
            'ref_email' => 'gold2@user.com',
            'password' => Hash::make('qwertyuiop'),
            'email_verified_at' => '2022-08-19 18:34:11',
            'deactivate' => 0,            'lastuseradded' => '2022-09-16 18:34:11'        ]);
        $gold10 = User::create([
            'name' => 'Gold User31',
            'number' => '03123456789',
            'accountname' => 'GoldUser',
            'bankname' => 'EasyPaisa',
            'team_bonus' => 0,
            'current_income' => 0,
            'reward_income' => 0,
            'total_income' => 0,
            'level' => 1,
            'score' => 0,
            'target' => 35,
            'email' => 'gold31@user.com',
            'ref_email' => 'gold3@user.com',
            'password' => Hash::make('qwertyuiop'),
            'email_verified_at' => '2022-08-19 18:34:11',
            'deactivate' => 0,            'lastuseradded' => '2022-09-16 18:34:11'        ]);
        $gold11 = User::create([
            'name' => 'Gold User32',
            'number' => '03123456789',
            'accountname' => 'GoldUser',
            'bankname' => 'EasyPaisa',
            'team_bonus' => 0,
            'current_income' => 0,
            'reward_income' => 0,
            'total_income' => 0,
            'level' => 1,
            'score' => 0,
            'target' => 35,
            'email' => 'gold32@user.com',
            'ref_email' => 'gold3@user.com',
            'password' => Hash::make('qwertyuiop'),
            'email_verified_at' => '2022-08-19 18:34:11',
            'deactivate' => 0,            'lastuseradded' => '2022-09-16 18:34:11'        ]);
        $gold12 = User::create([
            'name' => 'Gold User33',
            'number' => '03123456789',
            'accountname' => 'GoldUser',
            'bankname' => 'EasyPaisa',
            'team_bonus' => 0,
            'current_income' => 0,
            'reward_income' => 0,
            'total_income' => 0,
            'level' => 1,
            'score' => 0,
            'target' => 35,
            'email' => 'gold33@user.com',
            'ref_email' => 'gold3@user.com',
            'password' => Hash::make('qwertyuiop'),
            'email_verified_at' => '2022-08-19 18:34:11',
            'deactivate' => 0,            'lastuseradded' => '2022-09-16 18:34:11'        ]);
            $gold13 = User::create([
                'name' => 'Gold User111',
                'number' => '03123456789',
                'accountname' => 'GoldUser',
                'bankname' => 'EasyPaisa',
                'team_bonus' => 0,
                'current_income' => 0,
                'reward_income' => 0,
                'total_income' => 0,
                'level' => 1,
                'score' => 0,
                'target' => 35,
                'email' => 'gold111@user.com',
                'ref_email' => 'gold11@user.com',
                'password' => Hash::make('qwertyuiop'),
                'email_verified_at' => '2022-08-19 18:34:11',
                'deactivate' => 0,            'lastuseradded' => '2022-09-16 18:34:11'        ]);
                $gold14 = User::create([
                    'name' => 'Gold User112',
                    'number' => '03123456789',
                    'accountname' => 'GoldUser',
                    'bankname' => 'EasyPaisa',
                    'team_bonus' => 0,
                    'current_income' => 0,
                    'reward_income' => 0,
                    'total_income' => 0,
                    'level' => 1,
                    'score' => 0,
                    'target' => 35,
                    'email' => 'gold112@user.com',
                    'ref_email' => 'gold11@user.com',
                    'password' => Hash::make('qwertyuiop'),
                    'email_verified_at' => '2022-08-19 18:34:11',
                    'deactivate' => 0,            'lastuseradded' => '2022-09-16 18:34:11'        ]);
                    $gold15 = User::create([
                        'name' => 'Gold User113',
                        'number' => '03123456789',
                        'accountname' => 'GoldUser',
                        'bankname' => 'EasyPaisa',
                        'team_bonus' => 0,
                        'current_income' => 0,
                        'reward_income' => 0,
                        'total_income' => 0,
                        'level' => 1,
                        'score' => 0,
                        'target' => 35,
                        'email' => 'gold113@user.com',
                        'ref_email' => 'gold11@user.com',
                        'password' => Hash::make('qwertyuiop'),
                        'email_verified_at' => '2022-08-19 18:34:11',
                        'deactivate' => 0,            'lastuseradded' => '2022-09-16 18:34:11'        ]);
        

        $admin->roles()->attach($adminRole);
        $silver->roles()->attach($silverRole);
        $silver1->roles()->attach($silverRole);
        $silver2->roles()->attach($silverRole);
        $silver3->roles()->attach($silverRole);
        $silver4->roles()->attach($silverRole);
        $silver5->roles()->attach($silverRole);
        $silver6->roles()->attach($silverRole);
        $silver7->roles()->attach($silverRole);
        $silver8->roles()->attach($silverRole);
        $silver9->roles()->attach($silverRole);
        $silver10->roles()->attach($silverRole);
        $silver11->roles()->attach($silverRole);
        $silver12->roles()->attach($silverRole);
        $gold->roles()->attach($goldRole);
        $gold1->roles()->attach($goldRole);
        $gold2->roles()->attach($goldRole);
        $gold3->roles()->attach($goldRole);
        $gold4->roles()->attach($goldRole);
        $gold5->roles()->attach($goldRole);
        $gold6->roles()->attach($goldRole);
        $gold7->roles()->attach($goldRole);
        $gold8->roles()->attach($goldRole);
        $gold9->roles()->attach($goldRole);
        $gold10->roles()->attach($goldRole);
        $gold11->roles()->attach($goldRole);
        $gold12->roles()->attach($goldRole);
        $gold13->roles()->attach($goldRole);
        $gold14->roles()->attach($goldRole);
        $gold15->roles()->attach($goldRole);



        
    }
}
