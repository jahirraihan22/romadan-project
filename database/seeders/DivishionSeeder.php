<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DivishionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {
        $arr = [
            [
                'name' => 'Dhaka'
            ],

            [
                'name' => 'Rajshahi'
            ],

            [
                'name' => 'Chattogram'
            ],

            [
                'name' => 'Khulna'
            ],

            [
                'name' => 'Mymensing'
            ],

            [
                'name' => 'Sylhet'
            ],
            [
                'name' => 'Rangpur'
            ],

            [
                'name' => 'Barishal'
            ]
        ];
        foreach ($arr as $key => $a) {

            DB::table('divishions')->insert(
                [$key => $a]
            );
        }
    }
}
