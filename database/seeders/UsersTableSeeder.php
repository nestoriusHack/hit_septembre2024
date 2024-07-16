<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;  // Ajoutez cette ligne
use Illuminate\Support\Facades\Hash;  // Ajoutez cette ligne

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            //admin
            [
                'name' =>  'Admin',
                'email' => 'hitadmin@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'admin',
            ],

            //agent
            [
                'name' =>  'Agent',
                'email' => 'hitagent@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'agent',
            ],

            //user
            [
                'name' =>  'User',
                'email' => 'user@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'user',
            ]
        ]);
    }
}
