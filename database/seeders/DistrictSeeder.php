<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistrictSeeder extends Seeder
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
                'name' => 'নরসিংদী',
                'divishion_id' => '1',
                'sahri' => '-1',
                'iftar' => '-1'
            ], [
                'name' => 'গাজীপুর',
                'divishion_id' => '1',
                'sahri' => '0',
                'iftar' => '0'
            ], [
                'name' => 'শরিয়তপুর',
                'divishion_id' => '1',
                'sahri' => '1',
                'iftar' => '-1'
            ], [
                'name' => 'নারায়ণগঞ্জ',
                'divishion_id' => '1',
                'sahri' => '0',
                'iftar' => '-1'
            ], [
                'name' => 'টাঙ্গাইল',
                'divishion_id' => '1',
                'sahri' => '1',
                'iftar' => '2'
            ], [
                'name' => 'কিশোরগঞ্জ',
                'divishion_id' => '1',
                'sahri' => '-3',
                'iftar' => '-1'
            ], [
                'name' => 'মানিকগঞ্জ',
                'divishion_id' => '1',
                'sahri' => '1',
                'iftar' => '2'
            ], [
                'name' => 'মুন্সিপগঞ্জ',
                'divishion_id' => '1',
                'sahri' => '0',
                'iftar' => '-1'
            ], [
                'name' => 'রাজবাড়ি',
                'divishion_id' => '1',
                'sahri' => '3',
                'iftar' => '4'
            ], [
                'name' => 'মাদারীপুর',
                'divishion_id' => '1',
                'sahri' => '2',
                'iftar' => '0'
            ], [
                'name' => 'গোপালগঞ্জ',
                'divishion_id' => '1',
                'sahri' => '4',
                'iftar' => '2'
            ], [
                'name' => 'ফরিদপুর',
                'divishion_id' => '1',
                'sahri' => '3',
                'iftar' => '2'
            ],
            // chittagong 11

            [
                'name' => 'কুমিল্লা',
                'divishion_id' => '3',
                'sahri' => '-2',
                'iftar' => '-4'
            ], [
                'name' => 'ফেনী',
                'divishion_id' => '3',
                'sahri' => '-2',
                'iftar' => '-5'
            ], [
                'name' => 'ব্রাহ্মণবাড়িয়া',
                'divishion_id' => '3',
                'sahri' => '-3',
                'iftar' => '-3'
            ], [
                'name' => 'রাঙ্গামাটি',
                'divishion_id' => '3',
                'sahri' => '-5',
                'iftar' => '-9'
            ], [
                'name' => 'নোয়াখালী',
                'divishion_id' => '3',
                'sahri' => '-1',
                'iftar' => '-4'
            ], [
                'name' => 'চাঁদপুর',
                'divishion_id' => '3',
                'sahri' => '0',
                'iftar' => '-2'
            ], [
                'name' => 'লক্ষ্মীপুর',
                'divishion_id' => '3',
                'sahri' => '0',
                'iftar' => '-3'
            ], [
                'name' => 'চট্টগ্রাম',
                'divishion_id' => '3',
                'sahri' => '-3',
                'iftar' => '-7'
            ], [
                'name' => 'কক্সবাজার',
                'divishion_id' => '3',
                'sahri' => '-2',
                'iftar' => '-9'
            ], [
                'name' => 'খাগড়াছড়ি',
                'divishion_id' => '3',
                'sahri' => '-5',
                'iftar' => '-8'
            ], [
                'name' => 'বান্দরবান',
                'divishion_id' => '3',
                'sahri' => '-4',
                'iftar' => '-9'
            ],
            // খুলনা ৮ 
            [
                'name' => 'যশোর',
                'divishion_id' => '4',
                'sahri' => '6',
                'iftar' => '4'
            ], [
                'name' => 'সাতক্ষীরা',
                'divishion_id' => '4',
                'sahri' => '8',
                'iftar' => '4'
            ], [
                'name' => 'মেহেরপুর',
                'divishion_id' => '4',
                'sahri' => '7',
                'iftar' => '7'
            ], [
                'name' => 'নড়াইল',
                'divishion_id' => '4',
                'sahri' => '5',
                'iftar' => '3'
            ], [
                'name' => 'চুয়াডাঙ্গা',
                'divishion_id' => '4',
                'sahri' => '7',
                'iftar' => '6'
            ], [
                'name' => 'কুষ্টিয়া',
                'divishion_id' => '4',
                'sahri' => '5',
                'iftar' => '5'
            ], [
                'name' => 'মাগুরা',
                'divishion_id' => '4',
                'sahri' => '5',
                'iftar' => '4'
            ], [
                'name' => 'খুলনা',
                'divishion_id' => '4',
                'sahri' => '5',
                'iftar' => '2'
            ], [
                'name' => 'বাগেরহাট',
                'divishion_id' => '4',
                'sahri' => '5',
                'iftar' => '1'
            ], [
                'name' => 'ঝিনাইদহ',
                'divishion_id' => '4',
                'sahri' => '5',
                'iftar' => '5'
            ],

            // rajshahi

            [
                'name' => 'সিরাজগঞ্জ',
                'divishion_id' => '2',
                'sahri' => '2',
                'iftar' => '4'
            ], [
                'name' => 'পাবনা',
                'divishion_id' => '2',
                'sahri' => '4',
                'iftar' => '5'
            ], [
                'name' => 'বগুড়া',
                'divishion_id' => '2',
                'sahri' => '2',
                'iftar' => '6'
            ], [
                'name' => 'রাজশাহী',
                'divishion_id' => '2',
                'sahri' => '6',
                'iftar' => '8'
            ], [
                'name' => 'নাটোর',
                'divishion_id' => '2',
                'sahri' => '4',
                'iftar' => '7'
            ], [
                'name' => 'জয়পুরহাট',
                'divishion_id' => '2',
                'sahri' => '3',
                'iftar' => '7'
            ], [
                'name' => 'চাঁপাই নবাবগঞ্জ',
                'divishion_id' => '2',
                'sahri' => '7',
                'iftar' => '10'
            ], [
                'name' => 'নওগাঁ',
                'divishion_id' => '2',
                'sahri' => '4',
                'iftar' => '7'
            ],
            // sylhet 

            [
                'name' => 'সিলেট',
                'divishion_id' => '6',
                'sahri' => '-8',
                'iftar' => '-5'
            ], [
                'name' => 'মৌলভীবাজার',
                'divishion_id' => '6',
                'sahri' => '-7',
                'iftar' => '-5'
            ], [
                'name' => 'হবিগঞ্জ',
                'divishion_id' => '6',
                'sahri' => '-5',
                'iftar' => '-3'
            ], [
                'name' => 'সুনামগঞ্জ',
                'divishion_id' => '6',
                'sahri' => '-7',
                'iftar' => '-2'
            ],
            //  রংপুর 
            [
                'name' => 'পঞ্চগড়',
                'divishion_id' => '7',
                'sahri' => '2',
                'iftar' => '11'
            ], [
                'name' => 'দিনাজপুর',
                'divishion_id' => '7',
                'sahri' => '3',
                'iftar' => '10'
            ], [
                'name' => 'লালমনিরহাট',
                'divishion_id' => '7',
                'sahri' => '-1',
                'iftar' => '7'
            ], [
                'name' => 'নীলফামারী',
                'divishion_id' => '7',
                'sahri' => '2',
                'iftar' => '9'
            ], [
                'name' => 'গাইবান্ধা',
                'divishion_id' => '7',
                'sahri' => '0',
                'iftar' => '5'
            ], [
                'name' => 'ঠাকুরগাঁও',
                'divishion_id' => '7',
                'sahri' => '3',
                'iftar' => '11'
            ], [
                'name' => 'রংপুর',
                'divishion_id' => '7',
                'sahri' => '0',
                'iftar' => '7'
            ], [
                'name' => 'কুড়িগ্রাম',
                'divishion_id' => '7',
                'sahri' => '-1',
                'iftar' => '6'
            ],

            // borishal

            [
                'name' => 'ঝালকাঠি',
                'divishion_id' => '8',
                'sahri' => '3',
                'iftar' => '-1'
            ], [
                'name' => 'পটুয়াখালী',
                'divishion_id' => '8',
                'sahri' => '3',
                'iftar' => '-2'
            ], [
                'name' => 'পিরোজপুর',
                'divishion_id' => '8',
                'sahri' => '4',
                'iftar' => '0'
            ], [
                'name' => 'বরিশাল',
                'divishion_id' => '8',
                'sahri' => '2',
                'iftar' => '-1'
            ], [
                'name' => 'ভোলা',
                'divishion_id' => '8',
                'sahri' => '1',
                'iftar' => '-2'
            ], [
                'name' => 'বরগুনা',
                'divishion_id' => '8',
                'sahri' => '4',
                'iftar' => '-1'
            ],

            // mymensing

            [
                'name' => 'শেরপুর',
                'divishion_id' => '5',
                'sahri' => '-1',
                'iftar' => '3'
            ], [
                'name' => 'ময়মনসিংহ',
                'divishion_id' => '5',
                'sahri' => '-2',
                'iftar' => '1'
            ], [
                'name' => 'জামালপুর',
                'divishion_id' => '5',
                'sahri' => '-1',
                'iftar' => '4'
            ], [
                'name' => 'নেত্রকোনা',
                'divishion_id' => '5',
                'sahri' => '-4',
                'iftar' => '0'
            ],
        ];
        foreach ($arr as $key => $a) {

            DB::table('districts')->insert(
                [$key => $a]
            );
        }
    }
}
