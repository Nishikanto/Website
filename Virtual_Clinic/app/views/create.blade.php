@extends('layouts.default')
    @section('content')
        @include('includes.alert')
<div class="form-style-10">
<h1>Patient's Information</h1>
{{ Form::open(array('route' => 'reg.patients', 'method' => 'post', 'class' => 'form-registration')) }}
    
    <div class="inner-wrap">
        <label>Patient's Name<input type="text" name="field_name"/></label>
        
        <label>Date of Birth
        <input name="field_dob"type="date" class="form-control" id="exampleInputDOB1" placeholder="Date of Birth"/></label>
        
        <label>Gender <select type="text" name="field_gender">
          <option value="Male">Male</option>
          <option value="Female">Female</option>
        </select></label>

        <label>religion<select type="text" name="field_religion" >
          <option value="Muslims">Gynocologist</option>
          <option value="Hindus">Arthopedics</option>
        </select></label>
        
        <label>Number of Visit<input type="text" name="field_visitNo"/></label>
        
        <p>
        {{ Form::label('avatar', 'Avatar') }}
        {{ Form::file('avatar') }}
        </p>

        <input type="submit" name=submit></input></label>
    </div>

{{ Form::close() }}
</div>

@stop