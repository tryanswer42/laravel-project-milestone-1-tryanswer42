@extends('layouts.master')

@section('banner')
@guest
<ul class="actions">
    <li><a href="{{URL::to('register')}}" class="button">Sign in</a></li>
</ul>
@endguest

@endsection


@section('content')
<div class="row">

    <div class="container-fluid col-md-8">
        <div class="title"> <h1>Image of the day :</h1></div>
        <img class="col-md-12" src="https://source.unsplash.com/random" alt="Random image">
    </div>
    <div class="col-md-4">
        <div id="three-column" class="container-fluid">

            <div class="title">
                <h2>ALL FRESH NEW ARTICLES</h2>
                <span class="byline">Subscribe to our newsletter to never miss a news</span>
            </div>
            @forelse ($articles as $article)
            <div class="title">
                <h6>Datum : {{$article->datum}}</h6>
                <img class="col-md-12" src="{{$article->img}}" alt="">
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
</div>

@endsection

