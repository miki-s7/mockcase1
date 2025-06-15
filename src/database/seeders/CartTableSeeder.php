<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CartTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cart = [
            'user_id' => 1,
            'product_id' => 1,
            'payment' => '支払い方法'
        ];
        DB::table('cart')->insert($cart);
    }
}
