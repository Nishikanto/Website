@extends('layouts.nurseDefault')
    @section('content')
        @include('includes.alert')
<div class="form-style-10">
<h1>Visit Summary</h1>
{{ Form::open(array('route' => 'nurse.visit_summary', 'files' => true, 'method' => 'post', 'class' => 'form-registration', 'enctype' => "multipart/form-data")) }}
    <div class="inner-wrap">
        <label>Patient's Name <input type="text" name="patient_name" value="{{$patient_name}}"/></label>
        <input type="hidden" value="{{$patient_id}}" name="patient_id"></input>
        <label>Height<input type="text" name="height" /></label>
        <label>Weight<input type="text" name="weight" /></label>
        <label>Blood Pressure(Sys/Dias)<input type="text" name="bp" /></label>
            {{ Form::label('Retinal Image') }}
            {{ Form::file('retinal_image') }}
    </div>

    <input type="submit" name="submit" class="btn btn-primary"> </input>
    </div>
{{ Form::close() }}
</div>   
@stop

