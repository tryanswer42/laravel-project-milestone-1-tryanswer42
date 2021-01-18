@extends('layouts.master')


@section('content')

<div id="wrapper">
    <div id="three-column" class="container-fluid">
        @if(Auth::user()->isAdmin())
        <a href="{{URL::to('activities/'.$activity->id.'/edit')}}" class="button button-alt "> Edit</a>
        @endif
        <div class="title">


            <h6>Datum : {{$activity->activity_date}}</h6>

            <h2>{{$activity->name}}</h2>
            <p>{{$activity->description}}</p>
            <p >
                @if(Auth::user()->isAdmin())
            <form action="{{ route('activities.destroy', $activity) }}" method="POST">
                @method('DELETE')
                @csrf
                <button class="button button-alt">Delete activity</button>
            </form>
            @endif
            </p>
            <a href="{{URL::to('activities/')}}" class="button button-alt">Back to Agenda</a>
        </div>


    </div>
</div>


@endsection
