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
                'id' => '1',
                'name' => 'ঢাকা'
            ],

            [
                'id' => '2',
                'name' => 'রাজশাহী'
            ],

            [
                'id' => '3',
                'name' => 'চট্টগ্রাম'
            ],

            [
                'id' => '4',
                'name' => 'খুলনা'
            ],

            [
                'id' => '5',
                'name' => 'ময়মনসিংহ'
            ],

            [
                'id' => '6',
                'name' => 'সিলেট'
            ],
            [
                'id' => '7',
                'name' => 'রংপুর'
            ],

            [
                'id' => '8',
                'name' => 'বরিশাল'
            ]
        ];
        foreach ($arr as $key => $a) {

            DB::table('divishions')->insert(
                [$key => $a]
            );
        }
    }
}
