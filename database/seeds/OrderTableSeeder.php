<?php

use Illuminate\Database\Seeder;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $orders = new \App\Models\Order([
            'created_at' => '2017-04-11 17:48:53',
            'updated_at' => '2017-04-11 17:48:53',
            'user_id' => '1',            
            'cart' => 'O:15:"App\Models\Cart":6:{s:5:"items";a:2:{i:9;a:5:{s:3:"qty";i:1;s:5:"price";d:8.5;s:6:"weight";d:3125;s:5:"offer";i:35;s:4:"item";O:18:"App\Models\Product":23:{s:11:"',
            'address' => 'Windeggstrasse',
            'nummer' => '7',
            'postleitzahl' => '8953',
            'city' => 'Dietikon',
            'name' => 'Mauricio',
            'surname' => 'Ramirez',
            'payment_id' => 'ch_1A7REfD5Hus6m2Z8YMQY8SJK',
        ]);
        $orders->save();  

    }
}
