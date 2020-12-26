
@extends('layouts.master')
@guest
@section('banner')
    <div id="banner" class="container-fluid">
        <div class="title">
            <h2>Petasi Ordo</h2>
            <span class="byline">Multi sunt vocati pauci vero elicto</span>
        </div>
        <ul class="actions">
            <li><a href="{{URL::to('register')}}" class="button">Sign in</a></li>
        </ul>
    </div>
@endsection
@endguest

@section('content')

<img src="{asset('images/petase-logo.ico')}" alt="">

@endsection

