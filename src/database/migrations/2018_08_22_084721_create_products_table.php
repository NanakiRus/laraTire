<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('title');
            $table->string('name');
            $table->string('slug');
            $table->unsignedInteger('wear_id');
            $table->unsignedInteger('dia_id');
            $table->enum('season', ['Зима', 'Лето']);
            $table->unsignedInteger('brand_id');
            $table->unsignedInteger('model_id');
            $table->unsignedInteger('amount');
            $table->unsignedInteger('price');
            $table->unsignedInteger('category_id');
            $table->unsignedInteger('size_id');
            $table->string('description')->nullable();
            $table->text('text')->nullable();
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
