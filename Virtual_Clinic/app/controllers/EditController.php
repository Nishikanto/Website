<?php

class EditController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /edit
	 *
	 * @return Response
	 */
	public function DoctorView($id)
	{
		return View::make('doctors_edit')
		->with('title', 'Edit Doctor')
		->with('id', $id);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /edit/create
	 *
	 * @return Response
	 */
	public function DoctorSave()
	{
		 $rules=[

        	'field_id' => 'required',
         	'field_name' => 'required',
			'field_dob' => 'required',
			'field_gender' => 'required',
			'field_specialty' => 'required',
			'field_workingHours' => 'required',
			'availabilty' => 'required'
        ];

        $data = Input::all();

        $validator=Validator::make(Input::all(),$rules);

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator);
        }  else {
           
            $doctor = Doctor::find($data['field_id']);

           	$doctor->name = Input::get('field_name');
            $doctor->dob = Input::get('field_dob');
            $doctor->gender = Input::get('field_gender');
            $doctor->specialty = Input::get('field_specialty');
            $doctor->working_hourse = Input::get('field_workingHours');
            $doctor->unavailability = Input::get('availabilty');


            if($doctor->save()){
            	return Redirect::route('doctors_list')->with('success', 'Update Successfull');
            }else{
                return Redirect::back()->withErrors("Something went wrong, please try again");
            }

        }
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /edit
	 *
	 * @return Response
	 */
	public function NurseView($id)
	{
		return View::make('nurses_edit')
		->with('title', 'Edit Nurse')
		->with('id', $id);
	}

	/**
	 * Display the specified resource.
	 * GET /edit/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function NurseSave()
	{
		 $rules=[

        	'field_id' => 'required',
         	'field_name' => 'required',
			'field_dob' => 'required',
			'field_gender' => 'required',
        ];

        $data = Input::all();

        $validator=Validator::make(Input::all(),$rules);

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator);
        }  else {
           
            $nurse = Nurse::find($data['field_id']);

           	$nurse->name = Input::get('field_name');
            $nurse->dob = Input::get('field_dob');
            $nurse->gender = Input::get('field_gender');


            if($nurse->save()){
            	return Redirect::route('nurses_list')->with('success', 'Update Successfull');
            }else{
                return Redirect::back()->withErrors("Something went wrong, please try again");
            }

        }
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /edit/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function doctorDelete($id)
	{
		try {

			DB::table('doctors')->where('id', '=', $id)->delete();
			return Redirect::route('doctors_list')->with('success', 'Update Successfull');
		} catch (Exception $e) {
			return Redirect::route('doctors_list')->withErrors('Something wrong, please try again');
		}
		
		
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /edit/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function nurseDelete($id)
	{
		try {

			DB::table('nurses')->where('id', '=', $id)->delete();
			return Redirect::route('nurses_list')->with('success', 'Update Successfull');
		} catch (Exception $e) {
			return Redirect::route('nurses_list')->withErrors('Something wrong, please try again');
		}
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /edit/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function deleteMedication($id)
	{
		try {
			DB::table('visitsummary')->where('patient_id', '=', $id)->delete();
			return Redirect::route('dashboard')->with('success', 'Update Successfull');
		} catch (Exception $e) {
			return Redirect::route('dashboard')->withErrors('Something wrong, please try again');
		}
	}

}