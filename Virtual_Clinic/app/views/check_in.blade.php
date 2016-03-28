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
	
		            ->join('patients', 'appointments.patients_id', '=', 'patients.id')
		            ->join('doctors', 'appointments.doctors_id', '=', 'doctors.id')

		            ->select('appointments.*', 'doctors.name as doctors_name', 'patients.name as patients_name')
		            ->orderBy('appointments.schedule', 'desc')
		            ->get();



			        ?>

			            @foreach($appointments as $variable)
			              
			            <?php	
			                $myDay = Carbon\Carbon::parse($variable->schedule)->toDateString();
			                $myTime = Carbon\Carbon::parse($variable->schedule)->toTimeString();
			                $today = Carbon\Carbon::now()->toDateString();

			                if($myDay == $today){
			                	$day = 'Today'; ?>
			                	<tr>
			               	<td>{{$variable->patients_name}}</td>
			        		<td>{{$variable->doctors_name}}</td>
			        		<td>{{$day.' at '.$myTime}}</td>
			               	<td><a class="btn btn-xs btn-success btn-edit" href="check_in/{{$variable->patients_id}}/{{$variable->doctors_id}}/{{$variable->schedule}}">Check-in</a>
			        		</tr>
			                <?php	 } else $day = $variable->schedule;
						?>


			              
			        	@endforeach
						     
			     
			    </tbody>
			  </table>
			</main>
			</div>
 



@stop