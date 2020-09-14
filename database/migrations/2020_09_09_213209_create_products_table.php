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
            $table->string('name');
            $table->string('code');
            $table->string('orginal_price');                        
            $table->string('sale_price')->nullable();
            $table->string('brand_name');    
            $table->string('color');
            $table->string('description');   
            $table->string('category_name');                   
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories')->onUpdate('cascade')->onDelete('set null');          
            $table->timestamp('created_at')->current();
            $table->timestamp('updated_at')->current(); 
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
