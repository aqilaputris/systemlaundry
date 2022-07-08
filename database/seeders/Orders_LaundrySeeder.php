<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Orders_LaundrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders_laundry')->insert([
            'code_order' => 'LD001',
            'package_id' => '1',
            'total_price' => '70000',
            'user_name' => 'rahel',
            'user_phone' => '08132456789',
            'user_address' => 'busan, korea',
            'date_drop_laundry' => '2022-06-13',
            'date_take_laundry' => '2022-06-17',
            'date_finish_laundry' => '2022-06-18',
            'status' => 'finish',
            'created_at' => date("Y-m-d H-i-s"),
            'updated_at' => date("Y-m-d H-i-s"),
        ]);
    }
}
