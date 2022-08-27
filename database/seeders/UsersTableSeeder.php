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
        $helpdeskRole = Role::where('name','helpdesk')->first();
        $contributorRole = Role::where('name','contributor')->first();
        $studentRole = Role::where('name','student')->first();

        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('qwertyuiop'),
            'email_verified_at' => '2022-08-19 18:34:11'
        ]);

        $helpdesk = User::create([
            'name' => 'Helpdesk',
            'email' => 'helpdesk@helpdesk.com',
            'password' => Hash::make('qwertyuiop'),
            'email_verified_at' => '2022-08-19 18:34:11'
        ]);

        $contributor = User::create([
            'name' => 'xyz Contributor',
            'email' => 'contributor@contributor.com',
            'password' => Hash::make('qwertyuiop'),
            'email_verified_at' => '2022-08-19 18:34:11'
        ]);

        $student = User::create([
            'name' => 'xyz Student',
            'email' => 'student@student.com',
            'password' => Hash::make('qwertyuiop'),
            'email_verified_at' => '2022-08-19 18:34:11'
        ]);

        $admin->roles()->attach($adminRole);
        $helpdesk->roles()->attach($helpdeskRole);
        $contributor->roles()->attach($contributorRole);
        $student->roles()->attach($studentRole);
    }
}
