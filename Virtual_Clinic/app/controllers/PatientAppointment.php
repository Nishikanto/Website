<?php

class PatientAppointment extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /patientappointment
	 *
	 * @return Response
	 */
	public function appointmentView()
	{
		$patient = DB::table('patients')
						->where('report', Auth::User()->id)
						->first();;

		return View::make('PatientViews/appointment')
						->with('title', 'Appointmnet')
						->with('id', $patient->id)
						->with('name', $patient->name);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /patientappointment/create
	 *
	 * @return Response
	 */
	public function appointment()
	{
		$data = Input::all();
		$patient_id = $data['name'];
		$specialty = $data['specialty'];
		$patient_name = DB::table('patients')->where('id', $patient_id)->pluck('name');

		return View::make('PatientViews/doctor_chooser')
		->with('title', 'Appointment')
		->with('name', $patient_name)
		->with('id', $patient_id)
		->with('specialty', $specialty);
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /patientappointment
	 *
	 * @return Response
	 */
	public function doctorChooser()
	{
		$data = Input::all();
		$patient_id = $data['patient_id'];
		$doctor_id = $data['doctor_id'];
        $date = $data['appointment_date'];


		return View::make('PatientViews/schedule_chooser')
		->with('title', 'Appointment')
		->with('doctor_id', $doctor_id)
		->with('patient_id', $patient_id)
		->with('date', $date);
	}

	/**
	 * Display the specified resource.
	 * GET /patientappointment/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function makeAppointment()
	{
		$patient = null;
		$rules=[

            'patient_id' => 'required',
            'doctor_id' => 'required',
            'date' => 'required',
            'time' => 'required'

        ];

        $data = Input::all();

        $validator=Validator::make(Input::all(),$rules);

        $patient = DB::table('patients')
        	->where('id', $data['patient_id'])
        	->first();

        if ($validator->fails()) {

            return View::make('PatientViews/appointment')
            ->with('title', 'Appointment')
			->with('id', $data['patient_id'])
			->with('name', $patient->name)
			->withErrors($validator);

        } else {
        	
        	$doctor=DB::table('doctors')->where('id', $data['doctor_id'])->pluck('working_hourse');
        	$doctor_name = DB::table('doctors')->where('id', $data['doctor_id'])->pluck('name');
        	$appointmentCount = 0;
        	

        	$appointment = DB::table('appointments')
        	->where('schedule', $data['date'])
        	->get();


        	$appointmentCount = count($appointment);
        	$hourse  = $doctor;

        	
    		$appointment = new Appointment();

        	$appointment->patients_id = $data['patient_id'];
        	$appointment->doctors_id = $data['doctor_id'];
        	$appointment->schedule = $data['time'];

            	if($appointment->save()){
                	return View::make('PatientViews/appointmentComplete')
                	->with('title', 'appointment_complete')
                	->with('patient_name', $patient->name)
                	->with('patient_id', $data['patient_id'])
                	->with('doctor_name', $doctor_name)
                	->with('appointment_date', $data['date'])
                	->with('appointment_time', $data['time']);
            }	else {
            	return View::make('PatientViews/appointment')
            		->with('title', 'Appointment')
					->with('id', $data['patient_id'])
					->with('name', $patient_name)
					->withErrors("Something Went Wrong, please try again");
            }

        }
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /patientappointment/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function medication()
	{
		$patient = DB::table('patients')
						->where('report', Auth::User()->id)
						->first();;

		return View::make('PatientViews/medication')->with('title', 'medication')->with('id', $patient->id);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /patientappointment/{id}
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
	 * DELETE /patientappointment/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}