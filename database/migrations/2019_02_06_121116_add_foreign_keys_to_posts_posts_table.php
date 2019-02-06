<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPostsPostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('posts_posts', function(Blueprint $table)
		{
			$table->foreign('post_id1', 'posts_posts_ibfk_1')->references('id')->on('posts')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('post_id2', 'posts_posts_ibfk_2')->references('id')->on('posts')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('posts_posts', function(Blueprint $table)
		{
			// $table->dropForeign('posts_posts_ibfk_1');
			// $table->dropForeign('posts_posts_ibfk_2');
		});
	}

}
