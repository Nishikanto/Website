@extends('layouts.default')
    @section('content')
        @include('includes.alert')
<div class="form-style-10">
<h1>Edit Nurse's Information</h1>


{{ Form::open(array('route' => 'user.edit.nurse.save', 'files' => true, 'method' => 'post', 'class' => 'form-registration', 'enctype' => "multipart/form-data")) }}

     

     <?php $var = DB::table('nurses')
                     ->select('*')
                     ->where('id', '=', $id)
                     ->get(); ?>

    @foreach($var as $variable)
    
    <div class="inner-wrap">
         <input type="hidden" name="field_id" value="{{$variable->id}}" />

        <label>Doctor's Name<input type="text" name="field_name" value="{{$variable->name}}" /></label>
        
        <label>Date of Birth
        <input name="field_dob"type="date" class="form-control" value="{{$variable->dob}}" id="exampleInputDOB1" placeholder="Date of Birth"/></label>
        
        <label>Gender <select type="text" name="field_gender" value="{{$variable->gender}}">
          <option value="Male">Male</option>
          <option value="Female">Female</option>
        </select></label>

        <input type="submit" name=submit></input></label>
    </div>

    @endforeach

{{ Form::close() }}


</div>

@stop