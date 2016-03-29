@extends('layouts.docDefault')
    @section('content')
        @include('includes.alert')

        <div class="form-style-10">
			<h1>Visit Summary</h1>

			<?php
			 $visitsummary = 
                DB::table('visitsummary')
                ->where('id', $id)
                ->first();
        	?>

        	

        	<label>Patient Name : {{$visitsummary->patient_name}}</label>

        	<label>Patient Hight : {{$visitsummary->height}}</label>

        	<label>Patient Weight : {{$visitsummary->weight}}</label>

        	<label>Patient BP : {{$visitsummary->bp}}</label>

        	<label>Ratinal Image : {{$visitsummary->retinal_image}}</label>
        	<img height="280" width="320" alt="" src="{{asset('retinal_image/'.$visitsummary->retinal_image)}}">

        	{{ Form::open(array('route' => 'doctor.dashboard.medication.save', 'files' => true, 'method' => 'post', 'class' => 'form-registration', 'enctype' => "multipart/form-data")) }}
				    <div class="inner-wrap">
				    	<input type="hidden" value="{{$id}}" name="id"></input>
				    	<input  type="hidden" value="{{$visitsummary->patient_id}}" name="patient_id"></input>

				        <label>Medication <textarea type="text" name="medication"></textarea></label>
				    </div>

				    <div class="container">
				   
				   	<input type="submit" name=submit></input></label>
				    </div>
		{{ Form::close() }}

		</div>

@stop