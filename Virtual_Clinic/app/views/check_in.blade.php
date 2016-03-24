@extends('layouts.default')
    @section('content')
        @include('includes.alert')

			<div id="box">
			<main id="center">
			  <h1 style="color: black; font-style: bold; text-align: left">Check-in</h1>
			  <table class="pure-table pure-table-horizontal">
			    <thead>
			      <tr>
			        <th>Patient's Name</th>
			        <th>Doctor's Name</th>
			        <th>Appointed Schedule</th>
			        <th></th>

			        
			      </tr>
			    </thead>
			    <tbody style="color: black;">


				<?php			      
			      $appointments = DB::table('appointments')
		            ->join('patients', 'appointments.id', '=', 'patients.id')
		            ->join('doctors', 'appointments.id', '=', 'doctors.id')
		            ->select('appointments.*', 'doctors.name as doctors_name', 'patients.name as patients_name')
		            ->get();


			        ?>

			              @foreach($appointments as $variable)
			              <tr>
			               	<td>{{$variable->patients_name}}</td>
			        		<td>{{$variable->doctors_name}}</td>
			        		<td>{{$variable->schedule}}</td>
			               	<td><a  class="btn btn-xs btn-success btn-edit" href="#">Check-in</a>
			        		</tr>
			        	@endforeach
						     
			     
			    </tbody>
			  </table>
			</main>
			</div>
 



@stop