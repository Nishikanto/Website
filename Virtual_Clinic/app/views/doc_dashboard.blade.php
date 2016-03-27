@extends('layouts.docDefault')
    @section('content')
        @include('includes.alert')
         <div id="box">
      <main id="center">
        <h1 style="color: black; font-style: bold; text-align: left">Check-in</h1>
        <table class="pure-table pure-table-horizontal">
          <thead>
            <tr>
              <th>Patient's Name</th>
              <th>Appointed Schedule</th>
              <th></th>
              
            </tr>
          </thead>
          <tbody style="color: black;">


        <?php           
            $appointments = 
                DB::table('appointments')
                ->join('patients', 'appointments.patients_id', '=', 'patients.id')
                ->join('doctors', 'appointments.doctors_id', '=', 'doctors.id')
                ->join('visitsummary', 'appointments.patients_id', '=', 'visitsummary.patient_id')
                ->select('appointments.*', 'doctors.name as doctors_name', 'patients.name as patients_name', 'doctors.user_id as doctors_user_id', 'visitsummary.*')
                ->get()
                
              
              ?>
                    @foreach($appointments as $variable)

                    @if($variable->doctors_user_id == $id)
                       <tr>
                         <td>{{$variable->patients_name}}</td>
                         <td>{{$variable->schedule}}</td>
                         <td><a  class="btn btn-xs btn-success btn-edit" href="#">Check-in</a>
                       </tr>
                    @endif
                @endforeach
                 
           
          </tbody>
        </table>
      </main>
      </div>
@stop