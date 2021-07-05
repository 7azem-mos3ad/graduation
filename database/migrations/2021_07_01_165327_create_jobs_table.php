<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('jobs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('job_type_id');
			$table->string('title_en', 191);
			$table->string('title_ar', 191);
			$table->text('details_en');
			$table->text('details_ar');
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
		Schema::drop('jobs');
	}

}
