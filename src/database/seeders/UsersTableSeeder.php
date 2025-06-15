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
    }
}
