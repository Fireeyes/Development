<?php

class Create_Comments_Table {

	public function up()
{
		Schema::create('comments', function($table) {
			$table->increments('id');
			$table->integer('user_id');
			$table->integer('post_id');
			$table->text('content');
			$table->timestamps();
	});

}

	public function down()
{
		Schema::drop('comments');

}

}