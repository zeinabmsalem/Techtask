<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->integer('flag')->nullable();
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('set null');             
            $table->string('name');
            $table->string('code');
            $table->string('orginal_price');                        
            $table->string('sale_price')->nullable();
            $table->string('brand_name');    
            $table->string('color');
            $table->string('description');   
            // $table->string('image_name');     
            $table->string('category_name');  
            $table->integer('order_id')->nullable(); 
            $table->foreign('order_id')->references('id')->on('orders')->onUpdate('cascade')->onDelete('set null');                                                             
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
        Schema::dropIfExists('carts');
    }
}
