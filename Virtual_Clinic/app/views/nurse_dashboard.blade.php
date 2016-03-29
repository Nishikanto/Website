@extends('layouts.nurseDefault')
    @section('content')
        @include('includes.alert')
       <div id="box">
      <main id="center">
        <h1 style="color: black; font-style: bold; text-align: left">Check-in</h1>
        <table class="pure-table pure-table-horizontal">
          <thead>
            <tr>
              <th>Patient's id</th>
              <th>Patient's Name</th>
              <th>Patient's Date of Birth</th>
              <th>Assigned Doctor Name</th>
              <th>Appointed Schedule</th>
              <th></th>
              
            </tr>
          </thead>
          <tbody style="color: black;">


        <?php           
            $appointments = DB::table('checkin')
                ->join('patients', 'checkin.patient_id', '=', 'patients.id')
                ->join('doctors', 'checkin.doctor_id', '=', 'doctors.id')
                ->select(
                  'checkin.schedule as schedule',
                  'checkin.patient_id as patients_id',
                  'doctors.name as doctors_name', 
                  'patients.name as patients_name', 
                  'patients.dob as patients_dob', 
                  'patients.name as patients_name'
                  )->get();
              ?>

                    @foreach($appointments as $variable)
                    <tr>
                      <td>{{$variable->patients_id}}</td>
                      <td>{{$variable->patients_name}}</td>
                      <td>{{$variable->patients_dob}}</td>
                      <td>{{$variable->doctors_name}}</td>
                      <td>{{$variable->schedule}}</td>
                      <td><a class="btn btn-xs btn-success btn-edit" href="nurse/patients_managment/visit_summary/{{$variable->patients_id}}/{{$variable->patients_name}}">Visit Summary</a>
                  </tr>
                @endforeach
                 
           
          </tbody>
        </table>
      </main>
      </div>

        
@stop