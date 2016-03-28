@extends('layouts.default')
    @section('content')
        @include('includes.alert')

        

  <h1 style="text-align: left;">Medication Update</h1>
  <table class="pure-table pure-table-horizontal">
    <thead>
      <tr>
        <th>Patient ID</th>
        <th>Patient Name</th>
        <th>Medication</th>
        
      </tr>
    </thead>
    <tbody>
      
      <?php $var=DB::table('visitsummary')->get(); ?>

              @foreach($var as $variable)
              <?php 
                  if($variable->medication == ""){
                    break;
                  }

              ?>


              <tr>
               	<td>{{$variable->patient_id}}</td>
        		<td>{{$variable->patient_name}}</td>
        		<td>{{$variable->medication}}</td>
        		</tr>
        	@endforeach
     
     
    </tbody>
  </table>


@stop