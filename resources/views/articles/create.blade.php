@extends('layouts.master')


@section('content')

<div id="wrapper">
    <div id="three-column" class="container-fluid">

        <div class="title">
            <h2> Create new Article</h2>
        </div>

        <form method="POST" action="/articles">
            @csrf

            <div class="field">

                <label for="titel" class="label">Titel</label>

                <div class="control">
                    <input type="text"
                           class="input @error('titel') border-danger @enderror"
                           name="titel"
                           id="titel"
                           value="{{ old('titel') }}">

                    @error ('titel')
                    <p class="help text-danger">{{$errors->first('titel')}}</p>
                    @enderror

                </div>
            </div>

            <div class=" field">
                <label for="description" class="label">Description</label>
                <div class="control">
                    <textarea name="description" cols="58"
                              id="description"
                              class="textarea @error('description') border-danger @enderror"
                              value="{{ old('description') }}"></textarea>

                    @error ('description')
                    <p class="help text-danger">{{$errors->first('description')}}</p>
                    @enderror

                </div>
            </div>


            <div class="field">
                <label for="img" class="label">Image Url</label>

                <div class="control">
                    <input type="url" class="input" id="img" value="{{ old('img') }}">
                </div>
            </div>

            <div class=" field">
                <label for="description" class="label">Tags</label>
                <div class="control">
                    <select name="tags[]" multiple id="">
                        @foreach ($tags as $tag)
                        <option value="{{$tag->id}}">{{$tag->name}}</option>
                        @endforeach
                    </select>
                    @error ('description')
                    <p class="help text-danger">{{$errors->first('description')}}</p>
                    @enderror

                </div>
            </div>


            <div class="field">
                <label for="viewable" class="label">viewable?</label>

                <div class="control">
                    <input type="checkbox" name="viewable" value=1>
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


@endsection
