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
                'name' => 'ঢাকা'
            ],

            [
                'name' => 'রাজশাহী'
            ],

            [
                'name' => 'চট্টগ্রাম'
            ],

            [
                'name' => 'খুলনা'
            ],

            [
                'name' => 'ময়মনসিংহ'
            ],

            [
                'name' => 'সিলেট'
            ],
            [
                'name' => 'রংপুর'
            ],

            [
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
