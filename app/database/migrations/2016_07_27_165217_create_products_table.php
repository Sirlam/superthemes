<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//Create products table
        Schema::create('products', function(Blueprint $table){
            $table->increments('id');
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories');
            $table->string('title');
            $table->text('description');
            $table->decimal('old_price',6,2)->nullable();
            $table->decimal('new_price',6,2);
            $table->string('image');
            $table->string('upload_link');
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
		//Drop products table
        Schema::drop('products');
	}

}
