@extends('layouts.default')
    @section('content')
        @include('includes.alert')
<div class="form-style-10">
<h1>Doctor's Information</h1>
{{ Form::open(array('route' => 'reg.doctors', 'method' => 'post', 'class' => 'form-registration')) }}
    
    
    <div class="section">Appointment</div>
    <div class="inner-wrap">
        <label>Required Doctor<input type="number" name="field_doctorsid" /></label>
        <label>Scedule
        <input name="field_schedule"type="date" class="form-control" id="exampleInputDOB1" placeholder="Schedule"/></label>
    </div>

    <div class="inner-wrap">
        
        <input type="Done" name=submit></input></label>
    </div>

{{ Form::close() }}
</div>

@stop