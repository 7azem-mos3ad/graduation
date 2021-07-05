<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlidersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sliders', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title_en', 191);
			$table->string('title_ar', 191);
			$table->text('body_en');
			$table->text('body_ar');
			$table->timestamps(10);
			$table->boolean('activation')->default(1);
			$table->boolean('is_featured')->nullable();
			$table->string('action_url', 191)->nullable();
			$table->string('slug', 225);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sliders');
	}

}
