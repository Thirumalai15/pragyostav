<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();

        DB::table('users')->insert(array(
            0 =>
                array(
                    'name' => 'Admin',
                    'email' => 'admin@gmail.com',
                    'email_verified_at' => Carbon::now(),
                    'password' => Hash::make('ieteprag2022'),
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ),
            1 =>
            array(
                    'name' => 'Admin 2',
                    'email' => 'admin2@gmail.com',
                    'email_verified_at' => Carbon::now(),
                    'password' => Hash::make('ieteprag2022'),
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ),
            2 =>
            array(
                    'name' => 'Admin 3',
                    'email' => 'admin3@gmail.com',
                    'email_verified_at' => Carbon::now(),
                    'password' => Hash::make('ieteprag2022'),
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ),

        ));
    }
//User: pragyots_admin
    //Database: pragyots_db
}
