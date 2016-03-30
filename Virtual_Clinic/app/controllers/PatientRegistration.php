<?php

class PatientRegistration extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /patientregistration
	 *
	 * @return Response
	 */
	public function registration()
	{

		$destinationPath = public_path('patient_image/');
		$link_address = "/view/patients_managment/appointment"; 
		$patient_id = null;

		$rules = array(
			    	'field_email'  => 'required|email',
			    	'field_password' => 'required|min:3|confirmed',
			    	'field_password' => 'required|min:3',
			    
		    	   	'field_name' => 'required',
		            'field_dob' => 'required',
		            'field_gender' => 'required',
		            'field_religion' => 'required',
		            'field_visitNo' => 'required',

				);
			    $data=Input::all();
				// Create a new validator instance.
				$validator = Validator::make($data, $rules);


				if ($validator->fails()) {
		            return Redirect::back()->withErrors($validator);
		        } else if(!Input::hasFile('field_image')){
		        	 return Redirect::back()->withErrors("Image is required");
		      
		        } else {
		            
		            $photo_fileName = null;
		            if (Input::hasFile('field_image')){
		                $photo = Input::file('field_image');
		                $photo_fileName = strtotime(date('Y-m-d H:i:s')).md5($photo->getClientOriginalName()).".".$photo->getClientOriginalExtension();
		                $photo->move($destinationPath, $photo_fileName);
	            		}
	            		$user = new User;
	               		$user->email = Input::get('field_email');
	               		$user->password = Hash::make(Input::get('field_password'));
	               		$user->access_level = '4';
	               		if($user->save()){
           			    $patient = new Patient();
			            $patient->name = $data['field_name'];
			            $patient->dob = $data['field_dob'];
			            $patient->gender = $data['field_gender'];
			            $patient->religion = $data['field_religion'];
			            $patient->no_of_visit = $data['field_visitNo'];
			            $patient->image = $photo_fileName;
			            $patient->report = $user->id;

			            if($patient->save()){
			            	return Redirect::route('login');
			            } else {
							return Redirect::back()->withErrors('Something Went wrong, please try again');
	            		} 

				} else {

					return Redirect::back()->withErrors('Something Went wrong, please try again');

				}
		}
	
	}



	/**
	 * Show the form for creating a new resource.
	 * GET /patientregistration/create
	 *
	 * @return Response
	 */
	public function medication()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /patientregistration
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /patientregistration/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /patientregistration/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /patientregistration/{id}
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
	 * DELETE /patientregistration/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}