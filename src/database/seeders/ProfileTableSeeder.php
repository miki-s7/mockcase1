<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $profile=[
            'user_id'=>1,
            'photo' => 'xxx.jpeg',
            'postcode' => '1234567',
            'address' => '東京都新宿区',
            'building' => '〇〇ビル101'
        ];
        DB::table('profiles')->insert($profile);
    }
}
