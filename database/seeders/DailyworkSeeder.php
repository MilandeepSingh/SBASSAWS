<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class DailyworkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dailywork')->insert([
            [
                'heading'=>'Trimmed park grass',
                'details'=>'shamshaan ghat ch ghah kattan ate saaf safayi da kamm keeta gya',
                'members'=>5,
                'date'=>date("Y-m-d")
            ],
            [
                'heading'=>'Watered ashoka trees',
                'details'=>'Asi rahalli ate pajora wali side te ashoka de butya nu pani paya.',
                'members'=>6,
                'date'=>date("Y-m-d")
            ]
            ]);
    }
}
