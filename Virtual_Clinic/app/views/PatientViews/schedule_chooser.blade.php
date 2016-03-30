@extends('layouts.patDefault')
    @section('content')
        @include('includes.alert')
 
 <div class="form-style-10">
<h1>Choose Doctor</h1>


{{ Form::open(array('route' => 'patient_appointment.make_appointment', 'method' => 'post', 'class' => 'form-registration')) }}

        <input type="hidden" name="patient_id" value="{{$patient_id}}"></input>

        <input type="hidden" name="doctor_id" value="{{$doctor_id}}"></input>

        <input type="hidden" name="date" value = "{{$date}}"></input>

        <label>Choose Schedule<select type="text" name="time" id="doctorSelect">
            <?php $var=DB::table('appointments')->where('doctors_id', $doctor_id)->get(); ?>

            <?php 
              $schedule=array();
              foreach($var as $variable){
                array_push($schedule, $variable->schedule);
              }
                  
              
              
              $array = array($date.' 16.00', $date.' 16.30', $date.' 17.00', $date.' 17.30', $date.' 18.00', $date.' 19.30', $date.' 20.00'); 

              if($schedule != null){
                $final_array = array_diff($array, $schedule);
              } else  $final_array = $array;
              
            ?>

            @foreach($final_array as $variable)
              <option value='{{$variable}}'>{{$variable}}</option>
            @endforeach
      </select></label>
        
        <input type="submit" name=submit></input></label>
    </div>

{{ Form::close() }}
</div>


@stop