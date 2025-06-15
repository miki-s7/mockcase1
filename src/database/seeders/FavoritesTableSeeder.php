<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FavoritesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $favorite = [
            'user_id' => 1,
            'product_id' => 1
        ];
        DB::table('favorites')->insert($favorite);
    }
}
