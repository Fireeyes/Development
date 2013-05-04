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
			return Redirect::to('/')->with('login_errors', true);
			}
	}

	public function post_register()
	{
		$input = array(
			'username' => Input::get('username'),
			'password' => Input::get('password'),
			'retype'   => Input::get('retype'),
			'email'    => Input::get('email'),
			);
		$rules = array(
			'username' => 'required|min:4|max:16|alpha_num|unique:users',
			'password' => 'required|min:6',
			'retype'   => 'required|min:6|same:password',
			'email'    => 'required',
			);
		$v = Validator::make($input, $rules);
		if( $v->passes() )
		{
			$user = new User( array(
				'username' => Input::get('username'),
				'password' => Hash::make(Input::get('password')),
				'email'    => Input::get('email'),
			));

			$user->save();

			Auth::attempt(array(
				'username' => Input::get('username'),
				'password' => Input::get('password')
				));

			Redirect::home()->with('success', 'You have successfully registered.');
		}
		else
		{
			return Redirect::to('/')->with('errors', $v->errors)
									->with('register_errors', true);
		}
	}

	public function get_logout()
	{
		Auth::logout();

		return Redirect::to('/');
	}
}

?>