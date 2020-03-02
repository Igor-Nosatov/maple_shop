<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert([
            [
                'name' => 'Smart Security',
                'image' => 'images/category/1.jpg',
            ],
            [
                'name' => 'Smart Lighting',
                'image' => 'images/category/2.jpg',
            ],
            [
                'name' => 'Smart Power',
                'image' => 'images/category/3.jpg',
            ],
            [
                'name' => 'Smart Monitoring',
                'image' => 'images/category/4.jpg',
            ],
            [
                'name' => 'Smart Energy',
                'image' => 'images/category/5.jpg',
            ],
            [
                'name' => 'Smart Speakers',
                'image' => 'images/category/6.jpg',
            ],
        ]);
    }
}
