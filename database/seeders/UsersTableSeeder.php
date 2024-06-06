<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('users')->insert([
            'role_id'=>'0',
            'name' => 'user',
            'phone' => '01757859893',
            'country' => 'Bangladesh',
            'address' => 'Dhaka',
            'email' => 'monoj@user.com',
            'password' => bcrypt('monojkumar')
        ]);
        DB::table('users')->insert([
            'role_id'=>'1',
            'name' => 'admin',
            'phone' => '01757859893',
            'country' => 'Bangladesh',
            'address' => 'Dhaka',
            'email' => 'monoj@admin.com',
            'password' => bcrypt('monojkumar')
        ]);
        DB::table('users')->insert([
            'role_id'=>'2',
            'name' => 'super admin',
            'phone' => '01757859893',
            'country' => 'Bangladesh',
            'address' => 'Dhaka',
            'email' => 'monoj@superadmin.com',
            'password' => bcrypt('monojkumar')
        ]);
        DB::table('users')->insert([
            'role_id'=>'3',
            'name' => 'Block User',
            'phone' => '01757859893',
            'country' => 'Bangladesh',
            'address' => 'Dhaka',
            'email' => 'monoj@block.com',
            'password' => bcrypt('monojkumar')
        ]);
        
    }
}
