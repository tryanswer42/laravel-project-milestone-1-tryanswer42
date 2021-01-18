@extends('layouts.master')


@section('content')

<div id="wrapper">
    <div id="three-column" class="container-fluid row">
        <div class="col-md-4">

            <a href="{{URL::to('articles/create')}}" class="button button-alt">  Articles</a>

        </div>
        <div class="col-md-4">

            <a href="{{URL::to('activities/create')}}" class="button button-alt">  Activities</a>

        </div>
        <div class="col-md-4">

            <a href="{{URL::to('faqs/create')}}" class="button button-alt">  Faqs</a>

        </div>
    </div>
</div>


@endsection

