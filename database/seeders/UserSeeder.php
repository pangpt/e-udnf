<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = \Carbon\Carbon::now();

        DB::table('users')->insert([
            [
                'username' => 'superadmin',
                'fullname' => 'Super Admin',
                'password' => bcrypt('password'),
                'phone' => '0821382922911',
                'last_login' => $now,
                'role' => 'superadmin',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'username' => 'admin',
                'fullname' => 'Admin',
                'password' => bcrypt('password'),
                'phone' => '082111119922',
                'last_login' => $now,
                'role' => 'admin',
                'created_at' => $now,
                'updated_at' => $now
            ],
        ]);
    }
}
