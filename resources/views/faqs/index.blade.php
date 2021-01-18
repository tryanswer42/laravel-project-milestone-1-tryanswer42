@extends('layouts.master')


@section('content')

<div id="wrapper">
    <div id="three-column" class="container-fluid">

        <div class="title">
            <h2> Category questions</h2>

            @forelse ($categories as $category)
            <div class="col-md-4">

                <a href="{{URL::to('faqs/'.$category->id)}}" class="button button-alt">  {{$category->name}}</a>

            </div>
            @empty
            <p>No faqs yet</p>
            @endforelse


        </div>
    </div>


    @endsection

