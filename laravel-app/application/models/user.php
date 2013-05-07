<?php
class User extends Eloquent
{
	public function posts()
	{
		return $this->has_many('Post');
	}

	public function comment()
	{
		return $this->has_many('Comment');
	}
}
?>