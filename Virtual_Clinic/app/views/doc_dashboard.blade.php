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
                DB::table('checkin')
                ->join('patients', 'checkin.patient_id', '=', 'patients.id')
                ->join('doctors', 'checkin.doctor_id', '=', 'doctors.id')
                ->join('visitsummary', 'checkin.patient_id', '=', 'visitsummary.patient_id')
                ->select('checkin.patient_id as patient_id', 'checkin.schedule as schedule', 'doctors.name as doctors_name', 'patients.name as patients_name', 'doctors.user_id as doctors_user_id', 'visitsummary.id as id', 'visitsummary.medication as medication')
                ->get()
              
              ?>
                    @foreach($appointments as $variable)

                    @if($variable->doctors_user_id == $id && $variable->medication == "")
                       <tr>
                         <td>{{$variable->patients_name}}</td>
                         <td>{{$variable->schedule}}</td>
                         <td><a  class="btn btn-xs btn-success btn-edit" href="medication/{{$variable->id}}/{{$variable->patient_id}}">Madication</a>
                       </tr>
                    @endif
                @endforeach
                 
           
          </tbody>
        </table>
      </main>
      </div>
@stop