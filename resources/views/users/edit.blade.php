@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center text-dark">
        <div class="col-md-8  ">
            <div class="card">
                <div class="card-header">{{ __('Update Profile') }}</div>
                <div class="card-body">


                    <form method="post" action="{{ route('user.update') }}">
                        @csrf
                        @method('put')

                        <br>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                       name="name" value="{{$user->name}}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address')
                                }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                       name="email" value="{{$user->email}}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <br>

                        <div class="form-group row">
                            <label for="avatar" class="col-md-4 col-form-label text-md-right">Avatar Url</label>

                            <div class=" col-md-6">
                                <input type="text" class="form-control @error('avatar') is-invalid @enderror" id="avatar" name="avatar" value="{{$user->avatar}}">
                                @error('avatar')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br><br>

                        <img src="{{$user->avatar}}" alt="avatar">
                        <br><br>
                        <div class="form-group row">

                            <label for="birthday" class="col-md-4 col-form-label text-md-right">BirthDate</label>
                            <div>
                                <input type="text" class="form-control @error('bithday') is-invalid @enderror datetimepicker " name="birthday"
                                       value="{{$user->birthday}}">
                                @error('birthday')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <br><br><br>
                        <div class="field is-grouped"></div>
                        <dic class="control">
                            <button class="button is-link" type="submit">Update</button>
                        </dic>
                        <br><br><br><br><br>
                    </form>
                    @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Change Your Password?') }}
                    </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">

    $(function () {

        $('.datetimepicker').datetimepicker({format: 'yyyy-MM-DD HH:mm:ss'});

    });

</script>

@endsection
