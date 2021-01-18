@extends('layouts.master')


@section('content')
@if(Auth::user()->isAdmin())
<div id="wrapper">
    <div id="three-column" class="container-fluid">

        <div class="title">
            <h2> Create new Faq</h2>
        </div>

        <form action="{{ route('faqs.update', ['faq' => $faq]) }}" method="post">
            @method('put')
            @csrf


            <div class="field">

                <label for="question" class="label">Question</label>

                <div class="control">
                    <input type="text"
                           class="input @error('question') border-danger @enderror"
                           name="question"
                           id="question"
                           value="{{ $faq->question }}">

                    @error ('question')
                    <p class="help text-danger">{{$errors->first('question')}}</p>
                    @enderror

                </div>
            </div>

            <div class=" field">
                <label for="answer" class="label">Answer</label>
                <div class="control">
                    <input name="answer" cols="58"
                              id="answer"
                              class="textarea @error('answer') border-danger @enderror"
                              value="{{ $faq->answer }}">

                    @error ('answer')
                    <p class="help text-danger">{{$errors->first('answer')}}</p>
                    @enderror

                </div>
            </div>



            <div class=" field">
                <label for="categories" class="label">Category</label>
                <div class="control">
                    <select name="categories" id="categories">
                        @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                    @error ('categories')
                    <p class="help text-danger">{{$errors->first('categories')}}</p>
                    @enderror

                </div>
            </div>



            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link" type="submit">Submit</button>
                </div>
            </div>
        </form>

    </div>
</div>

@endif
@if(Auth::user()->isAdmin()===false)
Log in as Admin
@endif
@endsection
