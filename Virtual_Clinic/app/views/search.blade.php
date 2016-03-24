@extends('layouts.default')
    @section('content')
        @include('includes.alert')
 <div class="form-style-10">
<h1>Search Old Patient</h1>
{{ Form::open(array('route' => 'user.patients_managment.search_patient', 'files' => true, 'method' => 'post', 'class' => 'form-registration', 'enctype' => "multipart/form-data")) }}
    <div class="inner-wrap">
        <label>Patient's Name <input type="text" name="name" /></label>
         <label>Date of Birth
        <input name="dob" type="date" class="form-control" id="exampleInputDOB1" placeholder="Date of Birth"/></label>
    </div>

    <div class="container">
   
   	<input type="submit" name=submit></input></label>
    </div>
{{ Form::close() }}
</div>

@stop