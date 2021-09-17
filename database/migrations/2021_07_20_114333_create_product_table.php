<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string("name_product", 255)->nullable(); 
            $table->text("description")->nullable();
            $table->decimal("price", 6, 2);
            $table->decimal("price_hire", 6, 2);
            $table->integer('brand_id');
            $table->string("stock", 255)->nullable();
            $table->integer('collection_id');
            $table->timestamps();
            $table->integer('typeProduct_id');
            $table->text("about")->nullable();
            $table->string("meta_key_words", 255)->nullable();
            $table->string("meta_descriptions", 255)->nullable();
            $table->string("urlForSite", 255)->nullable();
            $table->string("articul", 255)->nullable();
            $table->string("price-hire_text", 255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
