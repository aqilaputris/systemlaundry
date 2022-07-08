<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          
        $package = [
            [
                'type' => "Express",
                'name' => 'Cuci Setrika',
                'price' => '25000',
                'created_at' => date("Y-m-d"),
                'updated_at' => date("Y-m-d"),
            ],
            [
                'type' => "Express",
                'name' => 'Cuci Kering',
                'price' => '40000',
                'created_at' => date("Y-m-d"),
                'updated_at' => date("Y-m-d"),
            ],
            [
                'type' => "Express",
                'name' => 'Cuci Biasa',
                'price' => '15000',
                'created_at' => date("Y-m-d"),
                'updated_at' => date("Y-m-d"),
            ],
            [
                'type' => "Express",
                'name' => 'Setrika',
                'price' => '20000',
                'created_at' => date("Y-m-d"),
                'updated_at' => date("Y-m-d"),
            ],
            [
                'type' => "Laundry",
                'name' => 'Cuci Setrika',
                'price' => '20000',
                'created_at' => date("Y-m-d"),
                'updated_at' => date("Y-m-d"),
            ],
            [
                'type' => "Laundry",
                'name' => 'Cuci Kering',
                'price' => '30000',
                'created_at' => date("Y-m-d"),
                'updated_at' => date("Y-m-d"),
            ],
            [
                'type' => "Laundry",
                'name' => 'Cuci',
                'price' => '5000',
                'created_at' => date("Y-m-d"),
                'updated_at' => date("Y-m-d"),
            ],
            [
                'type' => "Laundry",
                'name' => 'Setrika',
                'price' => '10000',
                'created_at' => date("Y-m-d"),
                'updated_at' => date("Y-m-d"),
            ],

        ];

        \DB::table('package')->insert($package);
    }
}
