@extends('layouts.default')
    @section('content')
        @include('includes.alert')

         @if (!empty($success))
           <div class="alert alert-success alert-dismissable fade in">
	  	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	  	{{ $success }}
	</div>
   
@endif

			<div >

			  <h1 style="text-align: left;">Search Result</h1>
			  <table width="200"  class="pure-table pure-table-horizontal">
			    <thead>
			      <tr>
			        <th>ID</th>
			        <th>Name</th>
			        <th>Date of Birth</th>
			        <th>Gender</th>
			        <th>Religion</th>
			        <th>No of Visit</th>
			        <th>image</th>
			        <th></th>
			        <th></th>
			        
			      </tr>
			    </thead>
			    <tbody style="color: black;">
			      
			      

			       <?php 

			       $var = DB::table('patients')
                     ->select('*')
                     ->where('name', 'like', '%'.$name.'%')
                     ->where('dob', '=', $dob)
                     ->get();

			       ?>

			              @foreach($var as $variable)
			              <tr>
			               	<td>{{$variable->id}}</td>
			        		
			               	<td>{{$variable->name}}</td>
			        		
			               	<td>{{$variable->dob}}</td>
			        		
			               	<td>{{$variable->gender}}</td>
			        		
			               	<td>{{$variable->religion}}</td>
			        		
			               	<td>{{$variable->no_of_visit}}</td>
			        		
			               	<td>  <img height="42" width="42" alt="" src="{{asset('patient_image/'.$variable->image)}}"></td>

			               	<td><a class="btn btn-xs btn-success btn-edit" href="search_patient/edit/{{$variable->id}}">Edit</a>
			               	<td><a  class="btn btn-xs btn-success btn-edit" href="/view/patients_managment/appointment/{{$variable->id}}">Make Appointment</a>
			              	  
			        		</tr>

			        	@endforeach
						     
			     
			    </tbody>
			  </table>

			</div>
 



@stop

<style type="text/css">
	.myStyle {
		width: 5%;
	}
</style>
