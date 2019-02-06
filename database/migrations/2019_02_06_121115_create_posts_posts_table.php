<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePostsPostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posts_posts', function(Blueprint $table)
		{
			$table->bigInteger('post_id1')->unsigned()->index('post_id1');
			$table->bigInteger('post_id2')->unsigned()->index('post_id2');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('posts_posts');
	}

}
