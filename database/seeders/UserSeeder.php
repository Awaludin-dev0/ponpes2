<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
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
        //
        DB::table('users')->insert([
            'name' => 'Administrator',
            'email' => 'ponpesalislamiyahsambas2020@gmail.com',
            'password' => Hash::make('!4ds3criet!086!?$%'),
            'role' => 'admin'
        ]);

        DB::table('users')->insert([
            'name' => 'Guru',
            'email' => 'guruponpes@gmail.com',
            'password' => Hash::make('980!x4xyr$#!r'),
            'role' => 'guru'
        ]);

        DB::table('users')->insert([
            'name' => 'Guru',
            'email' => 'guruponpes2@gmail.com',
            'password' => Hash::make('980!x4xyr$#!s'),
            'role' => 'guru'
        ]);

        DB::table('users')->insert([
            'name' => 'Guru',
            'email' => 'guruponpes3@gmail.com',
            'password' => Hash::make('980!x4xyr$#!t'),
            'role' => 'guru'
        ]);

        DB::table('users')->insert([
            'name' => 'Guru',
            'email' => 'guruponpes4@gmail.com',
            'password' => Hash::make('980!x4xyr$#!u'),
            'role' => 'guru'
        ]);
    }
}
