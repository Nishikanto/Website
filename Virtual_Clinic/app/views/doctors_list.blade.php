@extends('layouts.default')
    @section('content')
        @include('includes.alert')
        

    
  <h1 style="text-align: left";>Doctor List</h1>


   <table width="200"  class="pure-table pure-table-horizontal">
    <thead>
      <tr>
        <th>Doctor ID</th>
        <th>Doctor Name</th>
        <th>Date of Birth</th>
        <th>Gender</th>
        <th>specialty</th>
        <th>working_hourse</th>
        <th>unavailability</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody style="color: black;">
      
      <?php $var=DB::table('doctors')->get(); ?>

              @foreach($var as $variable)
              <tr>
               	<td>{{$variable->id}}</td>
        		<td>{{$variable->name}}</td>
        		<td>{{$variable->dob}}</td>
        		<td>{{$variable->gender}}</td>
        		<td>{{$variable->specialty}}</td>
        		<td>{{$variable->working_hourse}}</td>
        		<td>{{$variable->unavailability}}</td>
        		<td><a class="btn btn-xs btn-success btn-edit" href="edit/doctor/{{$variable->id}}">Edit</a></td>
        		<td><a class="btn btn-xs btn-success btn-edit" href="delete/doctor/{{$variable->id}}">Delete</a></td>
        		</tr>
        		
        	@endforeach
     
     
    </tbody>
  </table>


@stop



@stop