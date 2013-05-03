<?php

class Create_Posts_Table {

	public function up()
{
		Schema::create('posts', function($table) {
			$table->increments('id');
			$table->integer('user_id');
			$table->string('title');
			$table->text('content');
			$table->string('tags');
			$table->timestamps();
	});

}

	public function down()
{
		Schema::drop('posts');

}

}