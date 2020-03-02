<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SystemCompatibilityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        DB::table('sysytem_compatibilities')->insert([
            [
                'name' => 'Google Assistant',
            ],
            [
                'name' => 'Amazon Alexa',
            ],
            [
                'name' => 'Apple Homekit',
            ],
        ]);
    }
}
