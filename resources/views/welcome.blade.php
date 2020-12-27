
@extends('layouts.master')
@guest
@section('banner')

        <ul class="actions">
            <li><a href="{{URL::to('register')}}" class="button">Sign in</a></li>
        </ul>

@endsection
@endguest

@section('content')

<img src="{asset('images/petase-logo.ico')}" alt="">

@endsection

