@extends('layouts.patDefault')
    @section('content')
        @include('includes.alert')
     
     <a style="background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;" class="btn btn-xs btn-success btn-edit" href="patient_graph">Click to show your data in chart</a>

@stop
