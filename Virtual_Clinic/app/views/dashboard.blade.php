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
        <th></th>
        
      </tr>
    </thead>
    <tbody>
      
      <?php $var=DB::table('visitsummary')
      ->orderBy('patient_id', 'desc')
      ->get(); ?>

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
             <td><a class="btn btn-xs btn-success btn-edit" href="user/delete/medication/{{$variable->id}}">Delete this patient</a>
        		</tr>
        	@endforeach
     
     
    </tbody>
  </table>


@stop