@extends('layouts.master')


@section('content')

<div id="wrapper">

    <div id="three-column" class="container-fluid">
        @if(Auth::user()->isAdmin())
        <a href="{{URL::to('articles/'.$article->id.'/edit')}}" class="button button-alt "> Edit</a>
        @endif
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
        @if(Auth::user()->isAdmin())
        <form action="{{ route('articles.destroy', $article) }}" method="POST">
            @method('DELETE')
            @csrf
            <button class="button button-alt">Delete activity</button>
        </form>
        @endif
    </div>
</div>


@endsection
