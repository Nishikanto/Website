@extends('layouts.default')
    @section('content')
        @include('includes.alert')
 
 <div class="form-style-10">
<h1>Patient's Information</h1>
{{ Form::open(array('route' => 'reg.patients', 'files' => true, 'method' => 'post', 'class' => 'form-registration', 'enctype' => "multipart/form-data")) }}
        
        <label>Gender <select type="text" name="field_gender">
          <option value="Male">{{$Patient->name}}</option>
          <option value="Female">Female</option>
        </select></label>

        <label>religion<select type="text" name="field_religion" >
          <option value="Muslim">Muslim</option>
          <option value="Hindu">Hindu</option>
        </select></label>
        
        <label>religion<select type="text" name="field_religion" >
          <option value="Muslim">Muslim</option>
          <option value="Hindu">Hindu</option>
        </select></label>

        <input type="submit" name=submit></input></label>

{{ Form::close() }}
</div>



@stop
