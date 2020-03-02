<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'EZVIZ Full HD 1080p Wi-Fi Indoor Smart Security Camera',
                'price' => '71',
                'image' => 'images/products/1.jpg',
                'system_compatibility_id' => 1,
                'brand_id' => 1,
                'category_id' => 1,
            ],
            [
                'name' => 'EZVIZ Full HD Wi-Fi Outdoor Smart Home Security Bullet',
                'price' => '99',
                'image' => 'images/products/2.jpg',
                'system_compatibility_id' => 2,
                'brand_id' => 2,
                'category_id' => 1,
            ],
            [
                'name' => 'TP-Link Kasa Spot Full HD Wi-Fi Pan-Tilt Smart Home Camera',
                'price' => '79',
                'image' => 'images/products/3.jpg',
                'system_compatibility_id' => 3,
                'brand_id' => 3,
                'category_id' => 1,
            ],
            [
                'name' => 'TP-Link Kasa Spot Full HD WiFi Smart Home Camera',
                'price' => '70',
                'image' => 'images/products/4.jpg',
                'system_compatibility_id' => 2,
                'brand_id' => 4,
                'category_id' => 1,
            ],
            [
                'name' => 'Canary All-in-One Home Security Device - Black',
                'price' => '33',
                'image' => 'images/products/5.jpg',
                'system_compatibility_id' => 1,
                'brand_id' => 5,
                'category_id' => 1,
            ],
            [
                'name' => 'Yale Sync Alarm Kit Full control',
                'price' => '44',
                'image' => 'images/products/6.jpg',
                'system_compatibility_id' => 3,
                'brand_id' => 6,
                'category_id' => 1,
            ],
            [
                'name' => 'Bosch Smart Home Door/Window Contact',
                'price' => '55',
                'image' => 'images/products/7.jpg',
                'system_compatibility_id' => 2,
                'brand_id' => 1,
                'category_id' => 1,
            ],
            [
                'name' => 'Ring Wi-Fi-Enabled Door Chime',
                'price' => '66',
                'image' => 'images/products/8.jpg',
                'system_compatibility_id' => 3,
                'brand_id' => 2,
                'category_id' => 1,
            ],
            [
                'name' => 'Ring Quick Release Battery Pack',
                'price' => '11',
                'image' => 'images/products/9.jpg',
                'system_compatibility_id' => 1,
                'brand_id' => 3,
                'category_id' => 1,
            ],
            [
                'name' => 'Ring Floodlight Cam Smart Security Camera ',
                'price' => '45',
                'image' => 'images/products/10.jpg',
                'system_compatibility_id' => 2,
                'brand_id' => 4,
                'category_id' => 1,
            ],






            [
                'name' => 'TCP Smart WiFi Dimmable Warm White LED Bayonet 60W Light',
                'price' => '711',
                'image' => 'images/products/11.jpg',
                'system_compatibility_id' => 1,
                'brand_id' => 5,
                'category_id' => 2,
            ],
            [
                'name' => 'TCP Smart WiFi Dimmable Colour Changing to Warm',
                'price' => '199',
                'image' => 'images/products/12.jpg',
                'system_compatibility_id' => 3,
                'brand_id' => 6,
                'category_id' => 2,
            ],
            [
                'name' => 'TCP Smart WiFi Dimmable Colour Changing to Warm',
                'price' => '119',
                'image' => 'images/products/13.jpg',
                'system_compatibility_id' => 1,
                'brand_id' => 1,
                'category_id' => 2,
            ],
            [
                'name' => 'TCP Smart WiFi Dimmable Warm White Filament LED Bayonet',
                'price' => '444',
                'image' => 'images/products/14.jpg',
                'system_compatibility_id' => 2,
                'brand_id' => 2,
                'category_id' => 2,
            ],
            [
                'name' => 'TP-Link LB130 Smart Wi-Fi Colour-Changing E27 LED ',
                'price' => '343',
                'image' => 'images/products/15.jpg',
                'system_compatibility_id' => 2,
                'brand_id' => 3,
                'category_id' => 2,
            ],
            [
                'name' => 'Philips Hue Smart Wi-Fi Dimmable White B22 60W ',
                'price' => '474',
                'image' => 'images/products/16.jpg',
                'system_compatibility_id' => 3,
                'brand_id' => 4,
                'category_id' => 2,
            ],
            [
                'name' => 'TCP Smart WiFi Dimmable Warm White LED Edison Screw 60W',
                'price' => '515',
                'image' => 'images/products/17.jpg',
                'system_compatibility_id' => 1,
                'brand_id' => 5,
                'category_id' => 2,
            ],
            [
                'name' => 'TCP Smart WiFi Dimmable Warm White Filament LED',
                'price' => '616',
                'image' => 'images/products/18.jpg',
                'system_compatibility_id' => 3,
                'brand_id' => 6,
                'category_id' => 2,
            ],
            [
                'name' => 'Iotty Smart Switch - Rectangular Model E, 2 Gang - Black',
                'price' => '111',
                'image' => 'images/products/19.jpg',
                'system_compatibility_id' => 2,
                'brand_id' => 3,
                'category_id' => 2,
            ],
            [
                'name' => 'RTCP Smart WiFi Dimmable Colour Changing',
                'price' => '415',
                'image' => 'images/products/20.jpg',
                'system_compatibility_id' => 1,
                'brand_id' => 4,
                'category_id' => 2,
            ],







            [
                'name' => 'TCP Smart WiFi Plug - No Hub Required',
                'price' => '711',
                'image' => 'images/products/21.jpg',
                'system_compatibility_id' => 2,
                'brand_id' => 1,
                'category_id' => 3,
            ],
            [
                'name' => 'TP-Link Wi-Fi Smart Plug',
                'price' => '199',
                'image' => 'images/products/22.jpg',
                'system_compatibility_id' => 2,
                'brand_id' => 2,
                'category_id' => 3,
            ],
            [
                'name' => 'TP-Link Wi-Fi Energy Monitoring Smart Device Plug',
                'price' => '119',
                'image' => 'images/products/23.jpg',
                'system_compatibility_id' => 3,
                'brand_id' => 3,
                'category_id' => 3,
            ],
            [
                'name' => 'Hive Active Plug',
                'price' => '444',
                'image' => 'images/products/24.jpg',
                'system_compatibility_id' => 1,
                'brand_id' => 4,
                'category_id' => 3,
            ],
            [
                'name' => 'Lightwave Smart Series Socket (2 Gang) - White Metal',
                'price' => '343',
                'image' => 'images/products/25.jpg',
                'system_compatibility_id' => 3,
                'brand_id' => 5,
                'category_id' => 3,
            ],
            [
                'name' => 'Bosch Smart Home Smart Plug',
                'price' => '474',
                'image' => 'images/products/26.jpg',
                'system_compatibility_id' => 1,
                'brand_id' => 6,
                'category_id' => 3,
            ],
            [
                'name' => 'Lightwave Lighting & Power Starter Kit (Smart Series) ',
                'price' => '515',
                'image' => 'images/products/27.jpg',
                'system_compatibility_id' => 2,
                'brand_id' => 1,
                'category_id' => 3,
            ],
            [
                'name' => 'Yale Sync Smart Plug',
                'price' => '616',
                'image' => 'images/products/28.jpg',
                'system_compatibility_id' => 3,
                'brand_id' => 2,
                'category_id' => 3,
            ],
            [
                'name' => 'Lightwave Smart Series Socket (2 Gang) - Stainless Steel',
                'price' => '111',
                'image' => 'images/products/29.jpg',
                'system_compatibility_id' => 1,
                'brand_id' => 5,
                'category_id' => 3,
            ],
            [
                'name' => 'Lightwave Lighting & Power Starter Kit (Smart Series)',
                'price' => '415',
                'image' => 'images/products/30.jpg',
                'system_compatibility_id' => 2,
                'brand_id' => 4,
                'category_id' => 3,
            ],







            [
                'name' => 'Yale Heat and smoke detector with PIR motion detector',
                'price' => '711',
                'image' => 'images/products/31.jpg',
                'system_compatibility_id' => 1,
                'brand_id' => 1,
                'category_id' => 4,
            ],
            [
                'name' => 'Netatmo Personal Weather Station',
                'price' => '199',
                'image' => 'images/products/3.jpg',
                'system_compatibility_id' => 2,
                'brand_id' => 6,
                'category_id' => 4,
            ],
            [
                'name' => 'Motorola Video Baby Monitor 2" Screen',
                'price' => '119',
                'image' => 'images/products/33.jpg',
                'system_compatibility_id' => 3,
                'brand_id' => 2,
                'category_id' => 4,
            ],
            [
                'name' => 'Bosch Smart Home Indoor Climate Starter Kit',
                'price' => '444',
                'image' => 'images/products/34.jpg',
                'system_compatibility_id' => 1,
                'brand_id' => 4,
                'category_id' => 4,
            ],
            [
                'name' => 'Motorola Digital Video Baby Monitor 5" Screen',
                'price' => '343',
                'image' => 'images/products/35.jpg',
                'system_compatibility_id' => 2,
                'brand_id' => 5,
                'category_id' => 4,
            ],
            [
                'name' => 'Bosch Smart Home Smoke Detector',
                'price' => '474',
                'image' => 'images/products/36.jpg',
                'system_compatibility_id' => 1,
                'brand_id' => 6,
                'category_id' => 4,
            ],
            [
                'name' => 'Motorola Digital Video Baby Monitor 3.5" Screen',
                'price' => '515',
                'image' => 'images/products/37.jpg',
                'system_compatibility_id' => 3,
                'brand_id' => 1,
                'category_id' => 4,
            ],
            [
                'name' => 'Motorola Halo+ HD Smart Video Baby Monitor',
                'price' => '616',
                'image' => 'images/products/38.jpg',
                'system_compatibility_id' => 2,
                'brand_id' => 1,
                'category_id' => 4,
            ],
            [
                'name' => 'Motorola Audio Baby Monitor Mbp8',
                'price' => '111',
                'image' => 'images/products/39.jpg',
                'system_compatibility_id' => 1,
                'brand_id' => 3,
                'category_id' => 4,
            ],
            [
                'name' => 'Motorola Timer Audio Baby Monitor',
                'price' => '415',
                'image' => 'images/products/40.jpg',
                'system_compatibility_id' => 3,
                'brand_id' => 5,
                'category_id' => 4,
            ],








            [
                'name' => 'Hive Active Heating & Hot Water Thermostat',
                'price' => '71',
                'image' => 'images/products/41.jpg',
                'system_compatibility_id' => 1,
                'brand_id' => 2,
                'category_id' => 5,
            ],
            [
                'name' => 'Bosch Smart Home Radiator Thermostat',
                'price' => '9',
                'image' => 'images/products/42.jpg',
                'system_compatibility_id' => 2,
                'brand_id' => 3,
                'category_id' => 5,
            ],
            [
                'name' => 'Netatmo Smart Thermostat',
                'price' => '144',
                'image' => 'images/products/43.jpg',
                'system_compatibility_id' => 2,
                'brand_id' => 4,
                'category_id' => 5,
            ],
            [
                'name' => 'Bosch Smart Home Indoor Climate Starter Kit',
                'price' => '444',
                'image' => 'images/products/44.jpg',
                'system_compatibility_id' => 1,
                'brand_id' => 5,
                'category_id' => 5,
            ],
            [
                'name' => 'Hive Active Heating & Hot Water Thermostat with Professional',
                'price' => '39',
                'image' => 'images/products/45.jpg',
                'system_compatibility_id' => 2,
                'brand_id' => 6,
                'category_id' => 5,
            ],
            [
                'name' => 'Hive Active Heating Multizone Additional Smart Thermostat',
                'price' => '74',
                'image' => 'images/products/46.jpg',
                'system_compatibility_id' => 3,
                'brand_id' => 2,
                'category_id' => 5,
            ],
            [
                'name' => 'Hive Hub',
                'price' => '515',
                'image' => 'images/products/47.jpg',
                'system_compatibility_id' => 1,
                'brand_id' => 3,
                'category_id' => 5,
            ],
            [
                'name' => 'Hive Active Heating Thermostat without Professional ',
                'price' => '16',
                'image' => 'images/products/48.jpg',
                'system_compatibility_id' => 2,
                'brand_id' => 4,
                'category_id' => 5,
            ],
            [
                'name' => 'Bosch Smart Home Controller',
                'price' => '11',
                'image' => 'images/products/49.jpg',
                'system_compatibility_id' => 1,
                'brand_id' => 5,
                'category_id' => 5,
            ],
            [
                'name' => 'Smart Radiator Thermostat For Vertical Mounting - 4 Pack',
                'price' => '15',
                'image' => 'images/products/50.jpg',
                'system_compatibility_id' => 2,
                'brand_id' => 1,
                'category_id' => 5,
            ],
















            [
                'name' => 'Google Nest Mini - Chalk',
                'price' => '71',
                'image' => 'images/products/51.jpg',
                'system_compatibility_id' => 1,
                'brand_id' => 6,
                'category_id' => 6,
            ],
            [
                'name' => 'Google Home Max Hands-Free Smart Speaker - Charcoal',
                'price' => '9',
                'image' => 'images/products/52.jpg',
                'system_compatibility_id' => 2,
                'brand_id' => 1,
                'category_id' => 6,
            ],
            [
                'name' => 'Google Home Hands-Free Smart Speaker - White/Grey',
                'price' => '144',
                'image' => 'images/products/53.jpg',
                'system_compatibility_id' => 1,
                'brand_id' => 5,
                'category_id' => 6,
            ],
            [
                'name' => 'Kitsound Voice One Smart Speaker - Grey',
                'price' => '444',
                'image' => 'images/products/54.jpg',
                'system_compatibility_id' => 2,
                'brand_id' => 4,
                'category_id' => 6,
            ],
            [
                'name' => 'Google Nest Mini - Charcoal',
                'price' => '39',
                'image' => 'images/products/55.jpg',
                'system_compatibility_id' => 1,
                'brand_id' => 3,
                'category_id' => 6,
            ],
            [
                'name' => 'VQ Hepburn Voice Activated Smart Speaker - Grey & Copper',
                'price' => '74',
                'image' => 'images/products/56.jpg',
                'system_compatibility_id' => 2,
                'brand_id' => 2,
                'category_id' => 6,
            ],
            [
                'name' => 'Google Home Hub Hands-Free Smart Speaker with 7" Screen ',
                'price' => '515',
                'image' => 'images/products/57.jpg',
                'system_compatibility_id' => 1,
                'brand_id' => 1,
                'category_id' => 6,
            ],
            [
                'name' => 'Google Home Hub Hands-Free Smart Speaker with 7" Screen',
                'price' => '16',
                'image' => 'images/products/58.jpg',
                'system_compatibility_id' => 2,
                'brand_id' => 3,
                'category_id' => 6,
            ],
            [
                'name' => 'VQ Hepburn Voice Activated Smart Speaker - Black & Copper',
                'price' => '11',
                'image' => 'images/products/59.jpg',
                'system_compatibility_id' => 1,
                'brand_id' => 2,
                'category_id' => 6,
            ],



        ]);
    }
}
