@extends('layouts.patDefault')
    @section('content')
        @include('includes.alert')

<div class="form-style-10">
    <h1>Appointment Created</h1>
    <div>
          <h3>Patient id   :     <a style="color: blue">{{$patient_id}}</a></h3>
          <h3>Patient Name     :    <a style="color: blue">{{$patient_name}}</a></h3>
          <h3>Assigned Doctor  :     <a style="color: blue">{{$doctor_name}}</a></h3>
          <h3>Appointment Date :     <a style="color: blue">{{$appointment_date}}</a></h3>
          <h3>Appointment Time :     <a style="color: blue">{{$appointment_time}}</a></h3>
    </div>
    <br></br>

    <button class="btn btn-primary" onclick="myFunction()">Print this page</button>
</div>




<script>
function myFunction() {
    window.print();
}
</script>



@stop