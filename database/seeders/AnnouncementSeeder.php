<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class AnnouncementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('announcements')->insert([
        [
            'heading'=>'Trimming park grass',
            'details'=>'Kallu saare jane shamshaan ghat ch ghah kattan ate saaf safayi lyi pahuncho.',
            'date'=>date("Y-m-d"),
        ],
        [
            'heading'=>'Watering ashoka trees',
            'details'=>'Kallu asi rahalli ate pajora wali side te ashoka de butya nu pani pawange.',
            'date'=>date("Y-m-d"),
        ]
        ]);
        
    }
}
