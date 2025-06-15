<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comment = [
            'user_id' => 1,
            'product_id' => 1,
            'comment' => 'コメント'
        ];
        DB::table('comment')->insert($comment);
    }
}
