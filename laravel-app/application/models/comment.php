<?php

class Comment extends Eloquent 
{
	public function author()
	{
		return $this->belongs_to('User', 'user_id');
	}
	public function post()
	{
		return $this->belongs_to('Post', 'post_id');
	}
}