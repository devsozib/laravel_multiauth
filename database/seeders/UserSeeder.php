<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            ['name' => 'Admin', 'role_id' => '1', 'email' => 'admin@gmail.com', 'email_verified_at' =>  Carbon::now(), 'password' => Hash::make('12345678'), 'created_at' => Carbon::now()],
            ['name' => 'Trade', 'role_id' => '2', 'email' => 'trade@gmail.com', 'email_verified_at' =>  Carbon::now(), 'password' => Hash::make('12345678'), 'created_at' => Carbon::now()],
            ['name' => 'Customer', 'role_id' => '3', 'email' => 'customer@gmail.com', 'email_verified_at' =>  Carbon::now(), 'password' => Hash::make('12345678'), 'created_at' => Carbon::now()],
        ];
        DB::table('users')->delete();
        DB::table('users')->insert($users);
    }
}
