<?php

class Post extends Eloquent 
{
	public function author()
	{
		return $this->belongs_to('User', 'user_id');
	}

	public function comments()
	{
		return $this->has_many('Comment');
	}

}