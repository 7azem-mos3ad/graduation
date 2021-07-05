<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title_en', 191);
			$table->string('title_ar', 191);
			$table->text('excerpt_en');
			$table->text('excerpt_ar');
			$table->text('body_en')->nullable();
			$table->text('body_ar')->nullable();
			$table->timestamps(10);
			$table->string('slug', 225);
			$table->boolean('activation')->default(1);
			$table->boolean('is_featured')->nullable();
			$table->date('published_at');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('posts');
	}

}
