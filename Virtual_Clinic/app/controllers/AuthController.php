<?php

class AuthController extends \BaseController {

	public function login(){
		return View::make('auth.login')
					->with('title', 'Login');
	}

	

	public function doLogin()
	{
		$rules = array
		(
					'email'    => 'required',
					'password' => 'required'
		);
		$allInput = Input::all();
		$validation = Validator::make($allInput, $rules);

		//dd($allInput);


		if ($validation->fails())
		{

			return Redirect::route('login')
						->withInput()
						->withErrors($validation);
		} else
		{

			$credentials = array
			(
						'email'    => Input::get('email'),
						'password' => Input::get('password')
			);

			if (Auth::attempt($credentials))
			{
				if(Auth::user()->access_level== '1'){
					return Redirect::intended('dashboard');
				} elseif (Auth::user()->access_level == '2') {
					return Redirect::intended('doc_dashboard');
				} elseif (Auth::user()->access_level == '4') 
					return Redirect::intended('patient_dashboard');
				else {
					return Redirect::intended('nurse_dashboard');
				}

			} else
			{
				return Redirect::route('login')
							->withInput()
							->withErrors('Error in Email Address or Password.');
			}
		}
	}

	public function logout(){
		Auth::logout();
		return Redirect::route('login')
					->with('success',"You are successfully logged out.");
	}

	public function dashboard(){

		if(Auth::user()->access_level== '1'){
			return View::make('dashboard')
					->with('title','Dashboard');
		} else return 'You dont have access to this level';
		
	}

	public function doc_dashboard(){

		if(Auth::user()->access_level== '2'){
			return View::make('doc_dashboard')
					->with('title','Dashboard')
					->with('id', Auth::user()->id);
		} else return 'You dont have access to this level';
		
	}

	public function patient_dashboard(){

		if(Auth::user()->access_level== '4'){
			return View::make('patient_dashboard')
					->with('title','Dashboard');
		} else return 'You dont have access to this level';
		
	}

	public function nurse_dashboard(){

		if(Auth::user()->access_level== '3'){
			return View::make('nurse_dashboard')
					->with('title','Dashboard');
		} else return 'You dont have access to this level';
		
	}

	public function changePassword(){
		return View::make('auth.changePassword')
					->with('title',"Change Password");
	}

	public function doChangePassword(){
		$rules =[
			'password'              => 'required|confirmed',
			'password_confirmation' => 'required'
		];
		$data = Input::all();

		$validation = Validator::make($data,$rules);

		if($validation->fails()){
			return Redirect::back()->withErrors($validation)->withInput();
		}else{
			$user = Auth::user();
			$user->password = Hash::make($data['password']);

			if($user->save()){
				Auth::logout();
				return Redirect::route('login')
							->with('success','Your password changed successfully.');
			}else{
				return Redirect::route('dashboard')
							->with('error',"Something went wrong.Please Try again.");
			}
		}
	}



}