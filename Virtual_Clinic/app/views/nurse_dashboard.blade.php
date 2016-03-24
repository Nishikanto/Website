@extends('layouts.nurseDefault')
    @section('content')
        @include('includes.alert')
        <div id="box">
<main id="center">
  <h1>Patient's Report</h1>
  <table class="pure-table pure-table-horizontal">
    <thead>
      <tr>
        <th>Patient's Name</th>
        <th>Assigned Doctor</th>
        <th>Report</th>
        
      </tr>
    </thead>
    <tbody>
      
      <?php $var=DB::table('patients')->get(); ?>

              @foreach($var as $variable)
              <tr>
               	<td>{{$variable->name}}</td>
               	<?php $var=DB::table('doctors')->get(); ?>
        		<td>{{$variable->name}}</td>
        		<td>Unavailable</td>
        		</tr>
        	@endforeach
     
     
    </tbody>
  </table>
</main>
</div>
        
@stop