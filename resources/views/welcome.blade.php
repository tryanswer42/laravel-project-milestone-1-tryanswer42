
@extends('layouts.master')

@section('banner')
@guest
        <ul class="actions">
            <li><a href="{{URL::to('register')}}" class="button">Sign in</a></li>
        </ul>
@endguest

@endsection


@section('content')

<img src="{asset('images/petase-logo.ico')}" alt="">

@endsection

