<?php

class AccountsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /accounts
	 *
	 * @return Response
	 */
	public function doctorsAccountCreate()
	{

		if(Auth::user()->access_level == '1'){

				// Build the validation constraint set.
				$rules = array(
			    	'field_email'  => 'required|email',
			    	'field_password' => 'required|min:3|confirmed',
			    	'field_password' => 'required|min:3',
			    	'field_name' => 'required',
			    	'field_dob' => 'required',
			    	'field_gender' => 'required',
			    	'field_specialty' => 'required',
			    	'field_workingHours' => 'required',
			    	'availabilty' => 'required'

				);
			    $data=Input::all();
				// Create a new validator instance.
				$validator = Validator::make($data, $rules);

				if ($validator->passes()) {
					$user = new User;
               		$user->email = Input::get('field_email');
               		$user->password = Hash::make(Input::get('field_password'));
               		$user->access_level = '2';
               		if($user->save()){

               		$doctor = new Doctor;
               		$doctor->name = Input::get('field_name');
               		$doctor->dob = Input::get('field_dob');
               		$doctor->gender = Input::get('field_gender');
               		$doctor->specialty = Input::get('field_specialty');
               		$doctor->working_hourse = Input::get('field_workingHours');
               		$doctor->unavailability= Input::get('availabilty');
               		$doctor->user_id = $user->id;
               		if($doctor->save()){

               			return Redirect::route('user.registration_form', array('whose' => 'doctors_form'))->with('success','Registration Successful');

               		} else {
               			return Redirect::route('user.registration_form', array('whose' => 'doctors_form'))->withErrors($doctor);	
               		}

               		} else {
               			return Redirect::route('user.registration_form', array('whose' => 'doctors_form'))->withErrors($user);	
               		}
               		
				}

				return Redirect::route('user.registration_form', array('whose' => 'doctors_form'))->withErrors($validator);
				

		} else return 'You dont have access to this level';	

	}

	/**
	 * Show the form for creating a new resource.
	 * GET /accounts/create
	 *
	 * @return Response
	 */
	

	public function reg_form($whose)
	{
		if(Auth::user()->access_level == '1'){
			return View::make($whose)->with('title', 'Registration Form');
		} else return 'You dont have access to this level';
		
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /accounts
	 *
	 * @return Response
	 */
	public function nursesAccountCreate()
	{

		if(Auth::user()->access_level == '1'){

				// Build the validation constraint set.
				$rules = array(
			    	'field_email'  => 'required|email',
			    	'field_password' => 'required|min:3|confirmed',
			    	'field_password' => 'required|min:3',
			    	'field_name' => 'required',
			    	'field_dob' => 'required',
			    	'field_gender' => 'required'
				);
			    $data=Input::all();
				// Create a new validator instance.
				$validator = Validator::make($data, $rules);

				if ($validator->passes()) {
					$user = new User;
               		$user->email = Input::get('field_email');
               		$user->password = Hash::make(Input::get('field_password'));
               		$user->access_level = '3';
               		if($user->save()){

               		$nurse = new Nurse;
               		$nurse->name = Input::get('field_name');
               		$nurse->dob = Input::get('field_dob');
               		$nurse->gender = Input::get('field_gender');
               		$nurse->user_id = $user->id;
               		if($nurse->save()){

               			return Redirect::route('user.registration_form', array('whose' => 'nurses_form'))->with('success','Registration Successful');

               		} else {
               			return Redirect::route('user.registration_form', array('whose' => 'nurses_form'))->withErrors($nurse);	
               		}

               		} else {
               			return Redirect::route('user.registration_form', array('whose' => 'nurses_form'))->withErrors($user);	
               		}
				}

				return Redirect::route('user.registration_form', array('whose' => 'nurses_form'))->withErrors($validator);

		} else return 'You dont have access to this level';	
    	

	}

	/**
	 * Display the specified resource.
	 * GET /accounts/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function nurses_list()
	{
		return View::make('nurses_list')->with('title', 'Nurses List'); 
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /accounts/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function doctors_list()
	{
		return View::make('doctors_list')->with('title', 'Doctors List'); 
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /accounts/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /accounts/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}