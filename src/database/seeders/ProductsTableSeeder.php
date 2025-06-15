<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = [
            'name' => 'test',
            'image' => 'xxx.jpeg',
            'brand' => 'ブランド',
            'price' => '300',
            'content' => '商品説明',
            'information' => '商品情報'
        ];
        DB::table('products')->insert($product);
    }
}
