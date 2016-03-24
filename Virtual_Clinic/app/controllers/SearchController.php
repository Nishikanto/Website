<?php

class SearchController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /search
	 *
	 * @return Response
	 */
	public function searchOldPatient()
	{


        $rules=[

            'name' => 'required',
            'dob' => 'required',

        ];

        $data = Input::all();

        $validator=Validator::make(Input::all(),$rules);

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator);
        } else {
        	return View::make('SearchResult')
        	->with('title', 'search result')
        	->with('name', $data['name'])
        	->with('dob', $data['dob']);
        }
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /search/create
	 *
	 * @return Response
	 */
	public function editOldPatient($id)
	{
		return View::make('patient_edit')
        	->with('title', 'search result')
        	->with('id', $id);
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /search
	 *
	 * @return Response
	 */
	public function editOldPatientindb()
	{
		$destinationPath = public_path('patient_image/');
		$link_address = "/view/patients_managment/appointment"; 
		$patient_id = null;

        $rules=[

        	'field_id' => 'required',
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
        	
        	$patient = Patient::find($data['field_id']);

            $patient->name = $data['field_name'];
            $patient->dob = $data['field_dob'];
            $patient->gender = $data['field_gender'];
            $patient->religion = $data['field_religion'];
            $patient->no_of_visit = $data['field_visitNo'];

            if($patient->save()){
            	return View::make('SearchResult')
        		->with('title', 'search result')
        		->with('name', $data['field_name'])
        		->with('dob', $data['field_dob'])
        		->withSuccess('Update Successful');
            } else {
            	 return Redirect::back()->withErrors("Something went wrong, please try again");
            }
        	
        } else {
            $photo_fileName = null;
            if (Input::hasFile('field_image')){
                $photo = Input::file('field_image');
                $photo_fileName = strtotime(date('Y-m-d H:i:s')).md5($photo->getClientOriginalName()).".".$photo->getClientOriginalExtension();
                $photo->move($destinationPath, $photo_fileName);
            }
            $patient = Patient::find($data['field_id']);

            $patient->name = $data['field_name'];
            $patient->dob = $data['field_dob'];
            $patient->gender = $data['field_gender'];
            $patient->religion = $data['field_religion'];
            $patient->no_of_visit = $data['field_visitNo'];
            $patient->image = $photo_fileName;


            if($patient->save()){
            	return View::make('SearchResult')
        		->with('title', 'search result')
        		->with('name', $data['field_name'])
        		->with('dob', $data['field_dob'])
        		->withSuccess('Update Successful');
            }else{
                return Redirect::back()->withErrors("Something went wrong, please try again");
            }

        }
	}

	/**
	 * Display the specified resource.
	 * GET /search/{id}
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
	 * GET /search/{id}/edit
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
	 * PUT /search/{id}
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
	 * DELETE /search/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}