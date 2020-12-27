@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center text-dark">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Profile</div>
                <div class="card-body">


                    <form method="post" action="/user">
                        @csrf
                        @method('put')

                        <br>
                        <div class="field">
                            <label for="name" class="col-sm-2 col-form-label">Name</label>
                        </div>
                        <div class=" control">
                            <input type="text" class="input" id="name" name="name" value="{{$user->name}}">
                        </div>

                        <br>

                        <div class="field">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                        </div>
                        <div class=" control">
                            <input type="text" class="input" id="email" name="email" value="{{$user->email}}">
                        </div>

                        <br>

                        <div class="field">
                            <label for="avatar" class="col-sm-2 col-form-label">Avatar Url</label>
                        </div>
                        <div class=" control">
                            <input type="text" class="input" id="avatar" name="avatar" value="{{$user->avatar}}">
                        </div>

                        <br><br>

                        <img src="{{$user->avatar}}" alt="avatar">
                        <div class="field text-dark">

                            <label for="birthday" class="col-sm-2 col-form-label">BirthDate</label>

                            <input type="text" class="form-control datetimepicker " name="birthday" value="{{$user->birthday}}">

                        </div>


                        <div class="field is-grouped"></div>
                        <dic class="control">
                            <button class="button is-link" type="submit">Update</button>
                        </dic>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">

    $(function () {

        $('.datetimepicker').datetimepicker({format:'yyyy-MM-DD HH:mm:ss'});

    });

</script>

@endsection
