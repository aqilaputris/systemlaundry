<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('admin')->insert([
            'name' => 'admin1',
            'image' => 'logo',
            'email' => 'admin1@gmail.com',
            'password' => Hash::make('11112222'),
            'created_at' => date("Y-m-d H-i-s"),
            'updated_at' => date("Y-m-d H-i-s"),
        ]);
    }
}
