<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        DB::table('users')->insert([
            [
                'id' => 1,
                'id_role' => 1,
                'email' => 'administrator@magang.com',
                'password' => Hash::make('adminsmagang'),
                'name' => 'Admin Magang',
                'status' => null,
                'phone' => '082312345678',
                'is_active' => 1,            
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 2,
                'id_role' => 2,
                'email' => 'mahasiswa@magang.com',
                'password' => Hash::make('trisakti'),
                'name' => 'Mahasiswa',
                'status' => null,
                'phone' => '081234567890',
                'is_active' => 1,            
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);
    }
}
