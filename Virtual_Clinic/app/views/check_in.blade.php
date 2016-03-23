@extends('layouts.default')
    @section('content')
        @include('includes.alert')
 
 <div class="form-style-10">
<h1>Check-in Patient</h1>
<form>
    <div class="inner-wrap">
        <label>Patient's Name <input type="text" name="field1" /></label>
        <label>Doctor's Name <input type="text" name="field1" /></label>
    </div>

    <div class="container">
    <button type="button" class="btn btn-primary">Check-in For Report</button>
    </div>
</form>
</div>


@stop