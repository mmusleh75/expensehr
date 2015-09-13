<?php

class AuthController extends \BaseController {


	// Display the registration form for account creation

	public function signUp()
	{
		return View::make('auth.register');
	}


	// Save registration details, create user account and send activation email

	public function processSignUp()
	{
		$data = Input::all();
		$validator = User::validate_registration($data);
		if ($validator->fails()) {
			return Redirect::back()->withErrors($validator);
		}
			$password = $data['password'];
			$password = Hash::make($password);

			$user = new User();
			$user->username = $data['username'];
			$user->email = $data['email'];
			$user->password = $password;
			$user->save();

		$user->assignMemberRole();

			$throttle = new Throttle();
			$throttle->user_id = $user->id;
			$throttle->save();

			$profile = new Profile();
			$profile->user_id = $user->id;
			$profile->avatar = 'images/user.png';
			$profile->save(); 

		return Redirect::to('/')->withActivationMessage(Lang::get('larabase.signup_success'));
	}


	// Display the Login form

	public function login()
	{
		return View::make('auth.login')->with('title', 'Log In ~ Page');
	}


	// Attempt to Login user

	public function processLogin()
	{
		$validator = User::validate_login($data = Input::all());
		if ($validator->fails()) {
			return Redirect::back()->withErrors($validator);
		}
		else {
			$user = User::where('email', '=', $data['email'])->first();

			$credentials = array('email' => $data['email'], 'password' => $data['password']);

			if(Auth::attempt($credentials))
			{
					Event::fire('auth.login', array($user));

				return Redirect::to('dashboard');

			} else {

				return Redirect::to('/');
			}
			
		}
	}


	// Logout the user

	public function logout()
	{
		Auth::logout();
		return Redirect::to('/')->withInfo(Lang::get('larabase.logout'));
	}


}
