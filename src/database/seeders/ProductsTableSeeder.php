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
        $products = [
            'name' => '腕時計',
            'img' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/Armani+Mens+Clock.jpg',
            'brand' => 'xxx',
            'price' => 15000,
            'content' => 'スタイリッシュなデザインのメンズ腕時計',
            'condition' => '良好'
        ];
        DB::table('products')->insert($products);

        $products = [
            'name' => 'HDD',
            'img' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/HDD+Hard+Disk.jpg',
            'brand' => 'xxx',
            'price' => 5000,
            'content' => '高速で信頼性の高いハードディスク',
            'condition' => '目立った傷や汚れなし'
        ];
        DB::table('products')->insert($products);

        $products = [
            'name' => '玉ねぎ3束',
            'img' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/iLoveIMG+d.jpg',
            'brand' => 'xxx',
            'price' => 300,
            'content' => '新鮮な玉ねぎ3束のセット',
            'condition' => 'やや傷や汚れあり'
        ];
        DB::table('products')->insert($products);

        $products = [
            'name' => '革靴',
            'img' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/Leather+Shoes+Product+Photo.jpg',
            'brand' => 'xxx',
            'price' => 4000,
            'content' => 'クラシックなデザインの革靴',
            'condition' => '状態が悪い'
        ];
        DB::table('products')->insert($products);

        $products = [
            'name' => 'ノートPC',
            'img' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/Living+Room+Laptop.jpg',
            'brand' => 'xxx',
            'price' => 45000,
            'content' => '高性能なノートパソコン',
            'condition' => '良好'
        ];
        DB::table('products')->insert($products);

        $products = [
            'name' => 'マイク',
            'img' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/Music+Mic+4632231.jpg',
            'brand' => 'xxx',
            'price' => 8000,
            'content' => '高音質のレコーディング用マイク',
            'condition' => '目立った傷や汚れなし'
        ];
        DB::table('products')->insert($products);

        $products = [
            'name' => 'ショルダーバッグ',
            'img' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/Purse+fashion+pocket.jpg',
            'brand' => 'xxx',
            'price' => 3500,
            'content' => 'おしゃれなショルダーバッグ',
            'condition' => 'やや傷や汚れあり'
        ];
        DB::table('products')->insert($products);

        $products = [
            'name' => 'タンブラー',
            'img' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/Tumbler+souvenir.jpg',
            'brand' => 'xxx',
            'price' => 500,
            'content' => '使いやすいタンブラー',
            'condition' => '状態が悪い'
        ];
        DB::table('products')->insert($products);

        $products = [
            'name' => 'コーヒーミル',
            'img' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/Waitress+with+Coffee+Grinder.jpg',
            'brand' => 'xxx',
            'price' => 4000,
            'content' => '手動のコーヒーミル',
            'condition' => '良好'
        ];
        DB::table('products')->insert($products);

        $products = [
            'name' => 'メイクセット',
            'img' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/%E5%A4%96%E5%87%BA%E3%83%A1%E3%82%A4%E3%82%AF%E3%82%A2%E3%83%83%E3%83%95%E3%82%9A%E3%82%BB%E3%83%83%E3%83%88.jpg',
            'brand' => 'xxx',
            'price' => 2500,
            'content' => '便利なメイクアップセット',
            'condition' => '目立った傷や汚れなし'
        ];
        DB::table('products')->insert($products);
    }
}
