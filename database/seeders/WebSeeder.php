<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WebSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('web_services')->insert([
            [
                'type' => 'STANDARD',

                'price' => '$ 150.00',

                'description' => 'Elegant Design, PSD to WordPress, 3 - 5 Pages, Design Customization, Responsive Design, 3 Plugin/Extention, Revisions 5, Delivery Time 3 - 5 Days, Page Speed upto 80 % 
               '
            ],
            [
                'type' => 'PROFESSIONAL',

                'price' => '$ 275.00',

                'description' => 'Elegant Design, Domain & Hosting, 5 - 7 Pages, Design Customization, Responsive Design, 6 Plugin / Extention Revisions 8, Delivery Time 3 - 5 Days, Page Speed upto 90 %, Content Upload, Customization, Responsive Design
                '
            ],
            [
                'type' => 'PLANTINNUM',

                'price' => '$ 500.00',

                'description' => 'Elegant Design, Domain & Hosting, 8 - 12 Pages, 800 Backlinks / Classified listing, Responsive Design, 8 Plugin/Extention (Booking / Appointment), 3 Months Support, Delivery Time 3 - 5 Days, E-Commerce 
                ',

                
            ]
        ]);
    }
}
