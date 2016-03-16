@extends('layouts.default')
    @section('content')
        @include('includes.alert')
<div class="form-style-10">
<h1>Doctor's Information</h1>
{{ Form::open(array('route' => 'reg.doctors', 'method' => 'post', 'class' => 'form-registration')) }}
    
    
    <div class="section"><span>1</span>Accounts Informations</div>
    <div class="inner-wrap">
        <label>Email<input type="text" name="field_email" /></label>
        <label>Password<input type="password" name="field_password" /></label>
        <label>Confirm Password<input type="password" name="field_password" /></label>
    </div>

    <div class="section"><span>2</span>Details Informations</div>
    <div class="inner-wrap">
        <label>Doctor's Name<input type="text" name="field_name"/></label>
        
        <label>Date of Birth
        <input name="field_dob"type="date" class="form-control" id="exampleInputDOB1" placeholder="Date of Birth"/></label>
        
        <label>Gender <select type="text" name="field_gender">
          <option value="Male">Male</option>
          <option value="Female">Female</option>
        </select></label>

        <label>specialty<select type="text" name="field_specialty" >
          <option value="gynocologist">Gynocologist</option>
          <option value="arthopedics">Arthopedics</option>
        </select></label>
        
        <label>working hours<input type="text" name="field_workingHours"/></label>
        
        <label>Availability<select name="availabilty">
          <option value="available">Available</option>
          <option value="unavailable">Unavailable</option>
        </select></label>
        <input type="submit" name=submit></input></label>
    </div>

{{ Form::close() }}
</div>

@stop