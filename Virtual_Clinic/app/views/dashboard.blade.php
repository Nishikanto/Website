@extends('layouts.default')
    @section('content')
        @include('includes.alert')

        
<div id="box">
<main id="center">
  <h1>Schedules</h1>
  <table class="pure-table pure-table-horizontal">
    <thead>
      <tr>
        <th>Doctor's Name</th>
        <th>Specialty</th>
        <th>Availability</th>
        
      </tr>
    </thead>
    <tbody>
      
      <?php $var=DB::table('doctors')->get(); ?>

              @foreach($var as $variable)
              <tr>
               	<td>{{$variable->name}}</td>
        		<td>{{$variable->specialty}}</td>
        		<td>{{$variable->unavailability}}</td>
        		</tr>
        	@endforeach
     
     
    </tbody>
  </table>
</main>
</div>

@stop