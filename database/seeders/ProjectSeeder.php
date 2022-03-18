<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
            [
                'name'=>'Ashoka',
                'description'=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex explicabo, deleniti eius facilis nihil quis repellat provident temporibus ipsum placeat sit sed quaerat unde assumenda nulla accusamus ad officia. Fugit.",
                'status'=>'Under Maintenance',
                'gallery'=>"https://m.media-amazon.com/images/I/91Ek2hlBNZL._SX466_.jpg"
            ],
            [
                'name'=>'Park1',
                'description'=>"r sit amet consectetur adipisicing elit. Ex explicabo, deleniti eius facilis nihil quis repellat provident temporibus ipsum placeat sit sed quaerat unde assumenda nulla accusamus ad officia. Fugit.",
                'status'=>'Under Maintenance',
                'gallery'=>"https://static.toiimg.com/thumb/msid-70730506,width-1200,height-900,resizemode-4/.jpg"
            ],
            [
                'name'=>'Park2',
                'description'=>"ectetur adipisicing elit. Ex explicabo, deleniti eius facilis nihil quis repellat provident temporibus ipsum placeat sit sed quaerat unde assumenda nulla accusamus ad officia. Fugit.",
                'status'=>'Under Maintenance',
                'gallery'=>"https://m.media-amazon.com/images/I/91Ek2hlBNZL._SX466_.jpg"
            ],
            [
                'name'=>'Park3',
                'description'=>"Loet consectetur adipisicing elit. Ex explicabo, deleniti eius facilis nihil quis repellat provident temporibus ipsum placeat sit sed quaerat unde assumenda nulla accusamus ad officia. Fugit.",
                'status'=>'Under Maintenance',
                'gallery'=>"https://cdn.britannica.com/30/128430-050-D6578398/Boston-Public-Garden.jpg"
            ],
            [
                'name'=>'Shamshan Ghat',
                'description'=>"rem ipsum dolor sit amet consectetur adipisicing elit. Ex explicabo, deleniti eius facilis nihil quis repellat provident temporibus ipsum placeat sit sed quaerat unde assumenda nulla accusamus ad officia. Fugit.",
                'status'=>'Under Maintenance',
                'gallery'=>"https://resize.indiatvnews.com/en/resize/newbucket/1200_-/2019/08/parks-1566455734.jpg"
            ]
        ]);
    }
}
