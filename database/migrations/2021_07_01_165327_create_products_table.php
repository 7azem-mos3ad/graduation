<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('category_id');
			$table->string('name_en', 191);
			$table->string('name_ar', 191);
			$table->text('body_en')->nullable();
			$table->text('body_ar')->nullable();
			$table->text('excerpt_en')->nullable();
			$table->text('excerpt_ar');
			$table->string('price', 191);
			$table->string('offer_price', 191);
			$table->timestamps(10);
			$table->string('slug', 225);
			$table->boolean('activation')->default(1);
			$table->boolean('is_featured')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('products');
	}

}
