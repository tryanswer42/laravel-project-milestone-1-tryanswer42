@extends('layouts.master')

@section('content')
<div class=" justify-content-center text-dark">
    <div class="card">
        <div class="card-header">{{ __('Dashboard') }}</div>

        <div class="card-body">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif

            {{ __('You are logged in!') }}

            <?php
            header( "refresh:5;url=/" );
            echo "You\'ll be redirected in about 5 secs. If not, click <a href='/')}}'>here</a>.";
            ?>

        </div>
    </div>

</div>

@endsection
