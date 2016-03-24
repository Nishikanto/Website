@extends('layouts.default')
    @section('content')
        @include('includes.alert')
<div class="form-style-10">
<h1>Edit Patient's Information</h1>




{{ Form::open(array('route' => 'user.patients_managment.search_patient.edit_patient', 'files' => true, 'method' => 'post', 'class' => 'form-registration', 'enctype' => "multipart/form-data")) }}

     

     <?php $var = DB::table('patients')
                     ->select('*')
                     ->where('id', '=', $id)
                     ->get(); ?>

    @foreach($var as $variable)
    
    <div class="inner-wrap">

        <label>Patient's id<input value="{{$variable->id}}" type="text" name="field_id"/></label>

        <label>Patient's Name<input value="{{$variable->name}}" type="text" name="field_name"/></label>
        
        <label>Date of Birth
        <input value="{{$variable->dob}}"  name="field_dob" type="date" class="form-control" id="exampleInputDOB1" placeholder="Date of Birth"/></label>
        
        <label>Gender <select value="{{$variable->gender}}" type="text" name="field_gender">
          <option value="Male">Male</option>
          <option value="Female">Female</option>
        </select></label>

        <label>religion<select value="{{$variable->religion}}" type="text" name="field_religion" >
          <option value="Muslim">Muslim</option>
          <option value="Hindu">Hindu</option>
        </select></label>
        
        <label>Number of Visit<input value="{{$variable->no_of_visit}}" type="text" name="field_visitNo"/></label>

        <img height="120" width="120" alt="" src="{{asset('patient_image/'.$variable->image)}}"></img>
        
        {{ Form::label('Patient Image') }}
        {{ Form::file('field_image')  }}

        <br/><br/>
        <input type="submit" name=submit></input></label>
    </div>

    @endforeach

{{ Form::close() }}


</div>

@stop