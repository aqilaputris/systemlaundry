<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => '2',
        	'name' => 'taeil',
        	'email' => 'taeil@gmail.com',
        	'email_verified_at' => null,
        	'password' => Hash::make('12345678'),
        	'remember_token' => Str::random(10),
        	'created_at' => date("Y-m-d H-i-s"),
            'updated_at' => date("Y-m-d H-i-s"),
        ]);
    }
}
