<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RomadanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $day_bangla = ['শুক্রবার', 'শনিবার', 'রবিবার', 'সোমবার', 'মঙ্গলবার', 'বুধবার', 'বৃহস্পতিবার'];
        $arr = [
            [
                'romadan' => '১লা রমাদ্বান',
                'date' => '2021-04-14',
                'day' => $day_bangla[5],
                'sahri' => '04:20:00',
                'iftar' => '18:20:00'
            ], [
                'romadan' => '২রা রমাদ্বান',
                'date' => '2021-04-15',
                'day' => $day_bangla[6],
                'sahri' => '04:19:00',
                'iftar' => '18:20:00'
            ], [
                'romadan' => '৩রা রমাদ্বান',
                'date' => '2021-04-16',
                'day' => $day_bangla[0],
                'sahri' => '04:18:00',
                'iftar' => '18:21:00'
            ], [
                'romadan' => '৪ঠা রমাদ্বান',
                'date' => '2021-04-17',
                'day' => $day_bangla[1],
                'sahri' => '04:17:00',
                'iftar' => '18:21:00'
            ], [
                'romadan' => '৫ই রমাদ্বান',
                'date' => '2021-04-18',
                'day' => $day_bangla[2],
                'sahri' => '04:16:00',
                'iftar' => '18:21:00'
            ], [
                'romadan' => '৬ই রমাদ্বান',
                'date' => '2021-04-19',
                'day' => $day_bangla[3],
                'sahri' => '04:15:00',
                'iftar' => '18:22:00'
            ], [
                'romadan' => '৭ই রমাদ্বান',
                'date' => '2021-04-20',
                'day' => $day_bangla[4],
                'sahri' => '04:14:00',
                'iftar' => '18:23:00'
            ], [
                'romadan' => '৮ই রমাদ্বান',
                'date' => '2021-04-21',
                'day' => $day_bangla[5],
                'sahri' => '04:13:00',
                'iftar' => '18:23:00'
            ], [
                'romadan' => '৯ই রমাদ্বান',
                'date' => '2021-04-22',
                'day' => $day_bangla[6],
                'sahri' => '04:12:00',
                'iftar' => '18:23:00'
            ], [
                'romadan' => '১০ই রমাদ্বান',
                'date' => '2021-04-23',
                'day' => $day_bangla[0],
                'sahri' => '04:11:00',
                'iftar' => '18:24:00'
            ], [
                'romadan' => '১১ই রমাদ্বান',
                'date' => '2021-04-24',
                'day' => $day_bangla[1],
                'sahri' => '04:10:00',
                'iftar' => '18:24:00'
            ], [
                'romadan' => '১২ই রমাদ্বান',
                'date' => '2021-04-25',
                'day' => $day_bangla[2],
                'sahri' => '04:09:00',
                'iftar' => '18:25:00'
            ], [
                'romadan' => '১৩ই রমাদ্বান',
                'date' => '2021-04-26',
                'day' => $day_bangla[3],
                'sahri' => '04:08:00',
                'iftar' => '18:25:00'
            ], [
                'romadan' => '১৪ই রমাদ্বান',
                'date' => '2021-04-27',
                'day' => $day_bangla[4],
                'sahri' => '04:07:00',
                'iftar' => '18:26:00'
            ], [
                'romadan' => '১৫ই রমাদ্বান',
                'date' => '2021-04-28',
                'day' => $day_bangla[5],
                'sahri' => '04:06:00',
                'iftar' => '18:26:00'
            ], [
                'romadan' => '১৬ই রমাদ্বান',
                'date' => '2021-04-29',
                'day' => $day_bangla[6],
                'sahri' => '04:05:00',
                'iftar' => '18:27:00'
            ], [
                'romadan' => '১৭ই রমাদ্বান',
                'date' => '2021-04-30',
                'day' => $day_bangla[0],
                'sahri' => '04:04:00',
                'iftar' => '18:27:00'
            ], [
                'romadan' => '১৮ই রমাদ্বান',
                'date' => '2021-05-01',
                'day' => $day_bangla[1],
                'sahri' => '04:03:00',
                'iftar' => '18:28:00'
            ], [
                'romadan' => '১৯শে রমাদ্বান',
                'date' => '2021-05-02',
                'day' => $day_bangla[2],
                'sahri' => '04:02:00',
                'iftar' => '18:28:00'
            ], [
                'romadan' => '২০শে রমাদ্বান',
                'date' => '2021-05-03',
                'day' => $day_bangla[3],
                'sahri' => '04:01:00',
                'iftar' => '18:28:00'
            ], [
                'romadan' => '২১শে রমাদ্বান',
                'date' => '2021-05-04',
                'day' => $day_bangla[4],
                'sahri' => '04:01:00',
                'iftar' => '18:29:00'
            ], [
                'romadan' => '২২শে রমাদ্বান',
                'date' => '2021-05-05',
                'day' => $day_bangla[5],
                'sahri' => '04:00:00',
                'iftar' => '18:29:00'
            ], [
                'romadan' => '২৩শে রমাদ্বান',
                'date' => '2021-05-06',
                'day' => $day_bangla[6],
                'sahri' => '03:59:00',
                'iftar' => '18:30:00'
            ], [
                'romadan' => '২৪শে রমাদ্বান',
                'date' => '2021-05-07',
                'day' => $day_bangla[0],
                'sahri' => '03:58:00',
                'iftar' => '18:30:00'
            ], [
                'romadan' => '২৫শে রমাদ্বান',
                'date' => '2021-05-08',
                'day' => $day_bangla[1],
                'sahri' => '03:57:00',
                'iftar' => '18:31:00'
            ], [
                'romadan' => '২৬শে রমাদ্বান',
                'date' => '2021-05-09',
                'day' => $day_bangla[2],
                'sahri' => '03:57:00',
                'iftar' => '18:32:00'
            ], [
                'romadan' => '২৭শে রমাদ্বান',
                'date' => '2021-05-10',
                'day' => $day_bangla[3],
                'sahri' => '03:56:00',
                'iftar' => '18:32:00'
            ], [
                'romadan' => '২৮শে রমাদ্বান',
                'date' => '2021-05-11',
                'day' => $day_bangla[4],
                'sahri' => '03:55:00',
                'iftar' => '18:32:00'
            ], [
                'romadan' => '২৯শে রমাদ্বান',
                'date' => '2021-05-12',
                'day' => $day_bangla[5],
                'sahri' => '03:54:00',
                'iftar' => '18:33:00'
            ], [
                'romadan' => '৩০শে রমাদ্বান',
                'date' => '2021-05-13',
                'day' => $day_bangla[6],
                'sahri' => '03:54:00',
                'iftar' => '18:33:00'
            ]
        ];
        foreach ($arr as $key => $a) {

            DB::table('romadans')->insert(
                [$key => $a]
            );
        }
    }
}
