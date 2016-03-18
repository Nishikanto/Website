<?php

class PatientsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /patients
	 *
	 * @return Response
	 */
	public function patient_view($option)
	{
		if(Auth::user()->access_level == '1'){
			return View::make($option)->with('title', 'Registration Form');;
		} else return 'You dont have access to this level';
		
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /patients/create
	 *
	 * @return Response
	 */
	public function patienstRegistration()
	{
		$destinationPath = public_path('patient_image/');
		$link_address = "/view/patients_managment/appointment"; 

        $rules=[

            'field_name' => 'required',
            'field_dob' => 'required',
            'field_gender' => 'required',
            'field_religion' => 'required',
            'field_visitNo' => 'required',
            //'filed_image' => 'required'

        ];

        $data = Input::all();

        $validator=Validator::make(Input::all(),$rules);

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
            $patient = new Patient();

            $patient->name = $data['field_name'];
            $patient->dob = $data['field_dob'];
            $patient->gender = $data['field_gender'];
            $patient->religion = $data['field_religion'];
            $patient->no_of_visit = $data['field_visitNo'];
            $patient->image = $photo_fileName;

            if($patient->save()){
                return Redirect::route('view.patients_managment', array('option' => 'create'))->with('success', 'Successfully Created! Successfully Created!<br/><a href="/view/patients_managment/appointment/$patient->id">Make New Appoinment</a>');
            }

            else{
                return Redirect::route('view.patients_managment', array('option' => 'create'))->with('error', 'Something Went Wrong. Try Again.');
            }

        }
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /patients
	 *
	 * @return Response
	 */
	public function createAppointment()
	{
		return 'abc';
	}

	/**
	 * Display the specified resource.
	 * GET /patients/{id}
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
	 * GET /patients/{id}/edit
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
	 * PUT /patients/{id}
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
	 * DELETE /patients/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}