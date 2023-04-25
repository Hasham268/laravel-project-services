<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AllServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('services')->insert([[
            'name' => 'Web Development'
        ],
        [
            'name' => 'SEO'
        ],
        [
            'name' => 'Digital Marketing'
        ],
    
        ]);
    }
}
