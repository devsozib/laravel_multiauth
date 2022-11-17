<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = [
            ['role_id' => 1, 'role_name' => 'Admin', 'created_at' => Carbon::now()],
            ['role_id' => 2, 'role_name' => 'Trade ', 'created_at' => Carbon::now()],
            ['role_id' => 3, 'role_name' => 'Customer', 'created_at' => Carbon::now()],

        ];

        DB::table('roles')->delete();
        DB::table('roles')->insert($role);
    }
}
