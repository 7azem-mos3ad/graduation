<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('services', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name_en', 191);
			$table->string('name_ar', 191);
			$table->text('excerpt_en');
			$table->text('excerpt_ar');
			$table->text('description_en');
			$table->text('description_ar');
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
		Schema::drop('services');
	}

}
