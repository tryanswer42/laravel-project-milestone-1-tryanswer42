@extends('layouts.master')


@section('content')

<div id="wrapper">
    <div id="three-column" class="container-fluid">

        <div class="title">


            <h6>Datum : {{$activity->activity_date}}</h6>

            <h2>{{$activity->name}}</h2>
            <p>{{$activity->description}}</p>
            <p >

            </p>
            <a href="{{URL::to('activities/')}}" class="button button-alt">Back to Agenda</a>
        </div>

    </div>
</div>


@endsection
