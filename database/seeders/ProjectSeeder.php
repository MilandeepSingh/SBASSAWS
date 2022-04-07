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
                'description'=>"We planted more than a hundred ashoka trees in the village and on link roads to other villages. After facing so many challenges, we have managed to keep them flourishing since more than a year.",
                'status'=>'Completed',
                'gallery'=>"https://scontent.faip2-1.fna.fbcdn.net/v/t39.30808-6/242042028_1946345275526319_8672582076334179675_n.jpg?_nc_cat=100&ccb=1-5&_nc_sid=8bfeb9&_nc_ohc=Nnex5s3Hh7kAX_i9bl5&_nc_ht=scontent.faip2-1.fna&oh=00_AT-DoGwBSAP9gqqZzxH8iJ9IyBMNBoqpiZP4q9_YDMWJwA&oe=6251A375"
            ],
            [
                'name'=>'Cemetry Transformation',
                'description'=>"We transformed the way the cemetry of our village looked few years ago. From painting to planting, we have made it more beautiful than a commercial park site.",
                'status'=>'Completed',
                'gallery'=>"https://scontent.faip2-1.fna.fbcdn.net/v/t1.6435-9/118707697_1644355769058606_1413543018939213559_n.jpg?_nc_cat=105&ccb=1-5&_nc_sid=8bfeb9&_nc_ohc=M3UXmgV53AcAX_ORY9i&_nc_ht=scontent.faip2-1.fna&oh=00_AT8R7Fh0eGHeFTJwZI--5shpJ2_wqKDbo3i9QKWqFd8zXw&oe=626EB60D"
            ],
            [
                'name'=>'Veterinary Hospital Park',
                'description'=>"From a badly uneven land and weed struck land, we have made a beautiful park over there. Swings and rides are installed for children and excercise machines for kids.",
                'status'=>'Completed',
                'gallery'=>"https://scontent.faip2-1.fna.fbcdn.net/v/t39.30808-6/240452929_1928921463935367_2896256063857932887_n.jpg?_nc_cat=110&ccb=1-5&_nc_sid=8bfeb9&_nc_ohc=EOlt0VF5Uf4AX_uOyQa&_nc_ht=scontent.faip2-1.fna&oh=00_AT-WiUyzMcgZC1DsRM6AP4yP4fPR0J3d8omm1Mq2uMRbYw&oe=62543D82"
            ],
            [
                'name'=>'Gurdwara Sahib Park',
                'gallery'=>"https://scontent.faip2-1.fna.fbcdn.net/v/t39.30808-6/240669268_1928921200602060_3496593340245388362_n.jpg?_nc_cat=108&ccb=1-5&_nc_sid=8bfeb9&_nc_ohc=WrOwcfhD044AX83awgo&_nc_ht=scontent.faip2-1.fna&oh=00_AT-HZdqCAH2wDbtKbGCW39aK84Xz_CXs4a0Y5rKjEtcNxA&oe=624EF736",
                'status'=>'Completed',
                'description'=>"In the heart of the village, we have made an appealing park near the village pond which polishes the view of the Gurdwara Sahib."
            ],
            [
                'name'=>'550 plants on Gurpurab',
                'description'=>"On the 550th prakash purb of Guru Nanak Dev ji, we planted 550 plants in and around the village of various kinds to spread the message of Guru Ji.",
                'status'=>'Completed',
                'gallery'=>"https://scontent.faip2-1.fna.fbcdn.net/v/t1.6435-9/120655683_1676081149219401_4557123397327301505_n.jpg?_nc_cat=106&ccb=1-5&_nc_sid=8bfeb9&_nc_ohc=fnipykA59sQAX-8lNv2&_nc_ht=scontent.faip2-1.fna&oh=00_AT8j0OCbactTZ4NmkEWgVr4i7566OebkeFxNaBYTHRZS2Q&oe=626D8401"
            ]
        ]);
    }
}
