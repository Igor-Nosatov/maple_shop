<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
            [
                'name' => 'TCP',
                'image' => 'images/brands/1.jpg',
            ],
            [
                'name' => 'Yale',
                'image' => 'images/brands/2.jpg',
            ],
            [
                'name' => 'Ring',
                'image' => 'images/brands/3.jpg',
            ],
            [
                'name' => 'Ezviz',
                'image' => 'images/brands/4.jpg',
            ],
            [
                'name' => 'TP-Link',
                'image' => 'images/brands/5.jpg',
            ],
            [
                'name' => 'Philips',
                'image' => 'images/brands/6.jpg',
            ],
        ]);
    }
}
