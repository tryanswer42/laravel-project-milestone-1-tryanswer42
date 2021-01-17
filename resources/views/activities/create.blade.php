@extends('layouts.master')


@section('content')
<div class="container">
    <div class="row justify-content-center text-dark">
        <div class="col-md-8  ">
            <div class="card">
                <div class="card-header">{{ __('Update Profile') }}</div>
                <div class="card-body">


                    <form action="{{ route('activities.store') }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group ">
                         <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Activity name:') }}</label>

                            <br/>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                   name="name" value="{{ old('titel') }}" required autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <br/>
                        <div class="form-group ">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Activity description:') }}</label>

                            <br/>
                        <br/>
                            <textarea name="description" cols="58"
                                      id="description"
                                      class="textarea form-control @error('description') is-invalid @enderror"
                                      value="{{ old('description') }}"></textarea>

                            @error ('description')
                            <p class="help text-danger">{{$errors->first('description')}}</p>
                            @enderror
                        </div>

                        <br/><br/>
                        Start time:
                        <br/>
                        <input type="text" name="activity_date" class="datetimepicker"/>
                        <br/><br/>
                        <input type="submit" value="Save"/>
                    </form>

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
<!--<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>-->
<!--<script src="https://code.jquery.com/ui/1.11.3/jquery-ui.min.js"></script>-->
<!--<script>-->
<!--    $('.date').datepicker({-->
<!--        autoclose: true,-->
<!--        dateFormat: "yy-mm-dd"-->
<!--    });-->
<!--</script>-->
@endsection
