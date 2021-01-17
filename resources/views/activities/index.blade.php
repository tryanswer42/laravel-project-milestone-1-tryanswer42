@extends('layouts.master')


@section('content')
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css'/>

<h3>Calendar</h3>

<div id='calendar'></div>

<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>
<script>
    $(document).ready(function () {
        // page is now ready, initialize the calendar...
        $('#calendar').fullCalendar({
            // put your options and callbacks here
            events: [
            @foreach($activities as $activity)
        {
            title : '{{ $activity->name }}',
                start
        :
            '{{ $activity->activity_date }}',
                url:'{{route('activities.show', $activity->id)}}',
        }
    ,
    @endforeach
    ]
    })
    });
</script>
@endsection
