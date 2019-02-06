<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

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
			$table->bigInteger('id', true)->unsigned();
            $table->unsignedInteger('post_author');
			$table->timestamp('post_date')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->text('post_content');
			$table->text('post_title');
			$table->string('post_status', 20)->default('publish');
			$table->string('post_name', 200)->default('');
			$table->string('post_type', 20)->default('article');
            $table->text('post_category')->nullable();

            $table->foreign('post_author')->references('id')->on('users');
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
