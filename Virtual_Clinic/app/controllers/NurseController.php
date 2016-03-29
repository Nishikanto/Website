<?php

class NurseController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /nurse
	 *
	 * @return Response
	 */
	public function visitSummary($patient_id, $patient_name)
	{
		return View::make('visitSummary')
		->with('title', 'visit summary')
		->with('patient_id', $patient_id)
		->with('patient_name', $patient_name);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /nurse/create
	 */
	public function visitSummaryEntry()
	{
		$destinationPath = public_path('retinal_image/');
		$link_address = "/view/patients_managment/visitSummary"; 
		$patient_id = null;

        $rules=[

            'patient_id' => 'required',
            'patient_name' => 'required',
            'height' => 'required',
            'weight' => 'required',
            'bp' => 'required',
        ];

        $data = Input::all();

        $validator = Validator::make(Input::all(),$rules);

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator);
        } else if(!Input::hasFile('retinal_image')){
        	 return Redirect::back()->withErrors("Image is required");
      
        } else {
            $photo_fileName = null;
            if (Input::hasFile('retinal_image')){
                $photo = Input::file('retinal_image');
                $photo_fileName = strtotime(date('Y-m-d H:i:s')).md5($photo->getClientOriginalName()).".".$photo->getClientOriginalExtension();
                $photo->move($destinationPath, $photo_fileName);
            }

            $visitSummary = new Visitsummary();

            $visitSummary->patient_id = $data['patient_id'];
            $visitSummary->patient_name = $data['patient_name'];
            $visitSummary->height = $data['height'];
            $visitSummary->weight = $data['weight'];
            $visitSummary->bp = $data['bp'];
            $visitSummary->retinal_image = $photo_fileName;

            if($visitSummary->save()){
            	$patient_id = $visitSummary->id;
                return Redirect::Route('nurse_dashboard')->with('success', 'Successfully Updated');
            }

            else{
                return Redirect::back()->withErrors("Something Went Wrong. Try Again.");
            }

        }
	}
}