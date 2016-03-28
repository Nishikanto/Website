@extends('layouts.default')
    @section('content')
        @include('includes.alert')
<div class="form-style-10">
<h1>Edit Doctor's Information</h1>


{{ Form::open(array('route' => 'user.edit.doctor.save', 'files' => true, 'method' => 'post', 'class' => 'form-registration', 'enctype' => "multipart/form-data")) }}

     

     <?php $var = DB::table('doctors')
                     ->select('*')
                     ->where('id', '=', $id)
                     ->get(); ?>

    @foreach($var as $variable)
    
    <div class="inner-wrap">
         <input type="hidden" name="field_id" value="{{$variable->id}}" />

        <label>Doctor's Name<input type="text" name="field_name" value="{{$variable->name}}" /></label>
        
        <label>Date of Birth
        <input name="field_dob"type="date" class="form-control" value="{{$variable->dob}}" id="exampleInputDOB1" placeholder="Date of Birth"/></label>
        
        <label>Gender <select type="text" name="field_gender" value="{{$variable->gender}}">
          <option value="Male">Male</option>
          <option value="Female">Female</option>
        </select></label>

        <label>specialty<select type="text" name="field_specialty" value = "{{$variable->specialty}}">
          <option value="Cataract And Laser">Cataract And Laser</option>
          <option value="Cornea">Cornea</option>
          <option value="Glaucoma">Glaucoma</option>
          <option value="Lasik">Lasik</option>
          <option value="Phakic Lens">Phakic Lens</option>
        </select></label>
        
        <label>working hours<input type="text"  value="{{$variable->working_hourse}}" name="field_workingHours"/></label>
        
        <label>Availability<select name="availabilty" value="{{$variable->unavailability}}">
          <option value="available">Available</option>
          <option value="unavailable">Unavailable</option>
        </select></label>
        <input type="submit" name=submit></input></label>
    </div>

    @endforeach

{{ Form::close() }}


</div>

@stop