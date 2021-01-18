@extends('layouts.master')


@section('content')

<div id="wrapper">
    <div id="three-column" class="container-fluid">

        <div class="title">
            <h2> Questions</h2>
            <br><br><br>
            @forelse ($faqs as $faq)
            <a href="{{route('faqs.edit',$faq->id)}}" class="button button-alt">Edit</a>

            <h3> {{$faq->question}}</h3>

            <h4>{{$faq->answer}}</h4>

            @if(Auth::user()->isAdmin())
            <form action="{{ route('faqs.destroy', $faq) }}" method="POST">
                @method('DELETE')
                @csrf
                <button class="button button-alt">Delete FAQ</button>
            </form>
            @endif

            <a href="{{route('faqs.index')}}" class="button button-alt">Back to Categories</a>
        </div>
        @empty
        <p>No faqs yet</p>
        @endforelse


    </div>
</div>


@endsection

