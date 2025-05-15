<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            'name' => 'test',
            'email' => 'xxx@xxx.xxx',
            'password' => '0000'
        ];
        DB::table('users')->insert($user);
        $profile=[
            'user_id'=>1,
            'photo' => 'xxx.jpeg',
            'postcode' => '1234567',
            'address' => '東京都新宿区',
            'building' => '〇〇ビル101'
        ];
        DB::table('profile')->insert($profile);
    }
}
