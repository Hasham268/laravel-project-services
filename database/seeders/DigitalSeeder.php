<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DigitalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('digital_services')->insert([
            [
                'type' => 'STANDARD',

                'price' => '$ 150.00',

                'description' => 'Social Media Audit, Facebook Page Setup & Management, Instagram Page Setup & Management, Set Up and Optimization Of Business <br>Page / Profile, Page Management, Weekly 3 Posts, Content Calendar, Content Creation'
            ],
            [
                'type' => 'PROFESSIONAL',

                'price' => '$ 275.00',

                'description' => ' Social Media Audit, Facebook Page Setup & Management, Instagram Page Setup & Management, Twitter Page Setup & Management, Page Management, Weekly 4 Posts, Content Calendar, Content Creation, Hashtag Optimization, Instagram Page Setup & Management '
            ],
            [
                'type' => 'PLANTINNUM',

                'price' => '$ 500.00',

                'description' => 'Social Media Audit, Facebook Page Setup & Management, Instagram Social Media & Management, Twitter Page Setup & Management, Linkedin Page Setup & Management, Pinterest Page Setup & Management, Set Up and Optimization Of Business Page/Profile',

                
            ]
        ]);
    }
}
