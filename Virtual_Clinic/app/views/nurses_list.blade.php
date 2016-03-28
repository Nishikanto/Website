@extends('layouts.default')
    @section('content')
        @include('includes.alert')
        <div>

  <h1 style="text-align: left";>Nurse List</h1>
  <table width="200" class="pure-table pure-table-horizontal">
    <thead>
      <tr>
        <th>Doctor ID</th>
        <th>Doctor Name</th>
        <th>Date of Birth</th>
        <th>Gender</th>
        <th></th>
        <th></th>
        
        
      </tr>
    </thead>
    <tbody style="color: black;">
      
      <?php $var=DB::table('nurses')->get(); ?>

              @foreach($var as $variable)
              <tr>
               	<td>{{$variable->id}}</td>
        		<td>{{$variable->name}}</td>
        		<td>{{$variable->dob}}</td>
        		<td>{{$variable->gender}}</td>
        		<td><a class="btn btn-xs btn-success btn-edit" href="edit/nurse/{{$variable->id}}">Edit</a>
        		<td><a class="btn btn-xs btn-success btn-edit" href="delete/nurse/{{$variable->id}}">Delete</a>
        		</tr>
        	@endforeach
    </tbody>
  </table>

</div>
@stop