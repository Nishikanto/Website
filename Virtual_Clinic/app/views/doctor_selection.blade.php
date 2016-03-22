@extends('layouts.default')
    @section('content')
        @include('includes.alert')
 



 <div class="form-style-10">
<h1>Available Doctors</h1>


{{ Form::open(array('route' => 'view.patients_managment.newAppointment', 'method' => 'post', 'class' => 'form-registration')) }}
        

        <label>Patient Name<select type="text" name="field_gender">
          <option value='pName'>{{$name}}</option>
        </select></label>

        

        <label>Choose Available Doctors<select type="text" name="field_religion" >
            <?php $var=DB::table('doctors')->get(); ?>
              @foreach($var as $variable)
                <option value='doctor'>{{$variable->name}}</option>
              @endforeach
        </select></label>


        
        <input type="submit" name=submit></input></label>
    </div>

{{ Form::close() }}
</div>



@stop