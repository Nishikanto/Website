@extends('layouts.default')
    @section('content')
        @include('includes.alert')
 <div class="form-style-10">
<h1>Search Old Patient</h1>
<form>
    <div class="inner-wrap">
        <label>Patient's Name <input type="text" name="name" /></label>
         <label>Date of Birth
        <input name="dob"type="date" class="form-control" id="exampleInputDOB1" placeholder="Date of Birth"/></label>
    </div>

    <div class="container">
    <button type="button" class="btn btn-primary">Search</button>
    </div>
</form>
</div>

@stop