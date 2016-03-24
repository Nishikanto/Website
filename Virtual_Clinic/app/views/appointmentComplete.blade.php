@extends('layouts.default')
    @section('content')
        @include('includes.alert')

<div class="form-style-10">
    <h1>Appointment Created</h1>
    <div>
          <h3>Patient Serial   :     <a style="color: blue">{{$patient_serial}}</a></h3>
          <h3>Patient Name     :    <a style="color: blue">{{$patient_name}}</a></h3>
          <h3>Assigned Doctor  :     <a style="color: blue">{{$doctor_name}}</a></h3>
          <h3>Appointment Date :     <a style="color: blue">{{$appointment_date}}</a></h3>
          <h3>Appointment Time :     <a style="color: blue">{{$appointment_time}}</a></h3>
    </div>
</div>



@stop