@extends('layouts.master')


@section('content')

<div id="wrapper">
    <div id="three-column" class="container-fluid">

        <div class="title">


            <h6>Datum : {{$article->datum}}</h6>
            <img src="{{$article->img}}" alt="">
            <h2>{{$article->titel}}</h2>
            <p>{{$article->description}}</p>
            <p >
            @foreach ($article->tags as $tag)
            <a class="tag" href="/articles?tag={{$tag->name}}">{{$tag->name}}</a>
            @endforeach
            </p>
            <a href="{{URL::to('articles/')}}" class="button button-alt">Back to News</a>
        </div>

    </div>
</div>


@endsection
