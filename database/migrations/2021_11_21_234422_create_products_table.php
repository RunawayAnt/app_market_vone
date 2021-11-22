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
            $table->text('name');
            $table->text('slug');
            $table->text('description');
            $table->json('features')->nullable();
            $table->string('sku');
            $table->integer('price');
            // $table->integer('puntaje');//temporal
            $table->integer('stock');
            $table->tinyInteger('state');
            $table->text('image');
            $table->unsignedBigInteger('shop_id');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('brand_id')->nullable();

            $table->foreign('shop_id')
                ->references('id')
                ->on('shops')
                ->onDelete('cascade'); 

            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onDelete('cascade'); 

            $table->foreign('brand_id')
                ->references('id')
                ->on('brands')
                ->onDelete('set null'); 

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
