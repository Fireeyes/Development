<?php

class Authenticator_Controller extends Base_Controller {

	public $restful = true;

	public function get_login()
	{
		return View::make('auth.login');
	}

	public function get_register()
	{
		return View::make('auth.register');
	}

	public function post_login()
	{
		$userdata = array(
			'username' => Input::get('username'),
			'password' => Input::get('password')
			);

		if ( Auth::attempt($userdata) )
			{
			return Redirect::to('/');
			}
		else
			{
			return Redirect::to('login')->with('login_errors', true);
			}
	}

	public function post_register()
	{

	}

	public function get_logout()
	{
		Auth::logout();

		return Redirect::to('/');
	}
}

?>