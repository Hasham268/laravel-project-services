<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('seo_services')->insert([
            [
                'type' => 'STANDARD',

                'price' => '$ 150.00',

                'description' => ' 5 Keywords / Keywords Research, In Depth SEO Audit Report, OnPage / OffPage SEO, Link Building / Classified listing, 2 Blogs / Week, Monthly Report'
            ],
            [
                'type' => 'PROFESSIONAL',

                'price' => '$ 275.00',

                'description' => ' 10 Keywords / Global SEO Coverage, In Depth SEO Audit Report, OnPage / OffPage SEO, 300 Backlinks / Classified listing, 4 Blogs / Week, BiMonthly Report, Classified listing, 2 Blogs / Week, Monthly Report'
            ],
            [
                'type' => 'PLANTINNUM',

                'price' => '$ 500.00',

                'description' => '20 Keywords / Global SEO Coverage, In Depth SEO Audit Report, OnPage / OffPage SEO, 800 Backlinks / Classified listing, 7 Blogs / Week, BiMonthly Report, In Depth SEO Audit Report',

                
            ]
        ]);
    }
}
