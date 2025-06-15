<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product_category = [
            'product_id' => 1,
            'category_id' => 1
        ];
        DB::table('product_category')->insert($product_category);
    }
}
