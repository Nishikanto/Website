@extends('layouts.patDefault')
    @section('content')
        @include('includes.alert')
 
 <div class="form-style-10">
<h1>Choose Doctor</h1>


{{ Form::open(array('route' => 'patient_appointment.doctor_chooser', 'method' => 'post', 'class' => 'form-registration')) }}

        <label>Patient ID<select type="text" name="patient_id">
          <option value={{$id}}>{{$id}}</option>
        </select></label>

         <label>Patient Name<select type="text" name="patient_name">
          <option value={{$name}}>{{$name}}</option>
        </select></label>

         <label>Which Specialist<select type="text" name="specialty" >
            <option value='{{$specialty}}'>{{$specialty}}</option>

        </select></label>
        
        <label>Which Doctor<select type="text" name="doctor_id" id="doctorSelect">
            <?php $var=DB::table('doctors')->where('specialty', $specialty)->get(); ?>
              @foreach($var as $variable)
                <option value='{{$variable->id}}'>{{$variable->name}}</option>
              @endforeach
        </select></label>

        <p style="color: blue" id="scheduleViewer"></p>

        <label>Appointment Date
        <input name="appointment_date"type="date" class="form-control" id="datePiker" placeholder="appointment date"/></label>

        <!--<label>Appointment Time
        <input name="appointment_time"type="time" class="form-control" id="timePiker" placeholder="appointment time"/></label>-->
        
        <input type="submit" name=submit></input></label>
    </div>

{{ Form::close() }}
</div>

@stop