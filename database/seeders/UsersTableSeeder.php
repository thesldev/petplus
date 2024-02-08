<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            //Admin
            [
                'name' => 'Admin',
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin'),
                'role' => 'admin',
                'status' => 'active',
            ],
            //Shop Admin
            [
                'name' => 'Shop Admin',
                'username' => 'shopadmin',
                'email' => 'shopadmin@gmail.com',
                'password' => Hash::make('shopadmin'),
                'role' => 'shopadmin',
                'status' => 'active',
            ],

            //doctor
            [
                'name' => 'Doctor',
                'username' => 'doctor',
                'email' => 'doctor@gmail.com',
                'password' => Hash::make('doctor'),
                'role' => 'doctor',
                'status' => 'active',
            ],
            //pharmacist
            [
                'name' => 'Pharmacist',
                'username' => 'pharmacist',
                'email' => 'pharmacist@gmail.com',
                'password' => Hash::make('pharmacist'),
                'role' => 'pharmacist',
                'status' => 'active',
            ],

            //user
            [
                'name' => 'User',
                'username' => 'user',
                'email' => 'user@gmail.com',
                'password' => Hash::make('user'),
                'role' => 'user',
                'status' => 'active',
            ]
        ]); 
    }
}
