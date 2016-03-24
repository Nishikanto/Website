@extends('layouts.default')
    @section('content')
        @include('includes.alert')
 
 <div class="form-style-10">
<h1>Make New Appointment</h1>


{{ Form::open(array('route' => 'view.patients_managment.doctorChooser', 'method' => 'post', 'class' => 'form-registration')) }}
        <label>Patient Name<select type="text" name="name">
          <option value={{$id}}>{{$name}}</option>
        </select></label>

        <label>Which Specialist<select type="text" name="specialty" >
            <?php $var=DB::table('doctors')->groupBy('specialty')->get(); ?>
              @foreach($var as $variable)
                <option value='{{$variable->specialty}}'>{{$variable->specialty}}</option>
              @endforeach
        </select></label>
        
        <input type="submit" name=submit></input></label>
    </div>

{{ Form::close() }}
</div>



@stop