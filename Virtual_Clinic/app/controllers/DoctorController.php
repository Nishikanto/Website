<?php

class DoctorController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /doctor
	 *
	 * @return Response
	 */
	public function medication($patient_id)
	{
		return View::make('medication')->with('title', 'Medication Form')->with('patient_id', $patient_id);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /doctor/create
	 *
	 * @return Response
	 */
	public function medicationSave()
	{
		$rules=[

            'patient_id' => 'required',
            'medication' => 'required',
            //'filed_image' => 'required'

        ];

        $data = Input::all();

        $validator=Validator::make(Input::all(),$rules);

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator);
        }  else {
            
        	try {
			     DB::table('visitsummary')
	            ->where('patient_id', $data['patient_id'])
	            ->update(['medication' => $data['medication']]);


	            DB::table('checkin')->where('patient_id', '=', $data['patient_id'])->delete();


	            DB::table('patients')
	            ->where('id', '=', $data['patient_id'])
	            ->increment('no_of_visit');

	            return Redirect::route('doc_dashboard')->with('success', 'Update success full');
			}catch(\Exception $e){
			   return Redirect::back()->withErrors("Something went wrong!");
			}

        }
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /doctor
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /doctor/{id}
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
	 * GET /doctor/{id}/edit
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
	 * PUT /doctor/{id}
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
	 * DELETE /doctor/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}