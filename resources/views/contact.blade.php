@extends('layouts.master')


@section('content')

<div id="wrapper">
    <div id="three-column" class="container-fluid">

        <div class="title">
            <h2> Contact Us</h2>
        </div>

        <form method="POST" action="/contact">
            @csrf

            <div class="field">

                <label for="email" class="label">email</label>

                <div class="control">
                    <input type="text"
                           class="input @error('email') border-danger @enderror"
                           name="email"
                           id="email"
                           value="{{ old('email') }}">

                    @error ('email')
                    <p class="help text-danger">{{$message}}</p>
                    @enderror

                </div>
            </div>

            <div class=" field">
                <label for="message" class="label">Message</label>
                <div class="control">
                    <textarea name="message" cols="58"
                              id="message"
                              class="textarea @error('message') border-danger @enderror"
                              value="{{ old('message') }}"></textarea>

                    @error ('message')
                    <p class="help text-danger">{{ $message}}</p>
                    @enderror

                </div>
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link" type="submit">Send Email</button>
                </div>
            </div>
            @if (session('note'))
            <p class="text-success text-xs">
                {{ session('note')}}
            </p>
            @endif
        </form>
    </div>
</div>
@endsection
