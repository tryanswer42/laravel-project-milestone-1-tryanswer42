@extends('layouts.master')


@section('content')

<div id="wrapper">
    <div id="three-column" class="container-fluid">

        <div class="title">
            <h2>ALL FRESH NEW ARTICLES</h2>
            <span class="byline">Subscribe to our newsletter to never miss a news</span>
        </div>
        @forelse ($articles as $article)
        <div class="title">
            <h6>Datum : {{$article->datum}}</h6>
            <img src="{{$article->img}}" alt="">
            <h3>{{$article->titel}}</h3>
            <p>{!! \Illuminate\Support\Str::words($article->description, 10,'...') !!}</p>
            <p>
                @foreach ($article->tags as $tag)
                <a href="/articles?tag={{$tag->name}}">{{$tag->name}}</a>
                @endforeach
            </p>

            <a href="{{route('articles.show', $article->id)}}" class="button button-alt">More Info</a>
        </div>
        @empty
        <p>No articles yet</p>
        @endforelse


    </div>
</div>


@endsection
