<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            //$table->foreignId('products_category_id')->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->string('image');
            $table->string('brand');
            $table->integer('price');
            $table->string('content');
            $table->string('information');
            //$table->foreignId('favorites_id')->constrained()->cascadeOnDelete();
            //$table->foreignId('comment_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
