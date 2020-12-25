@extends('layouts.master')


@section('content')

<div id="wrapper">
    <div id="three-column" class="container-fluid">

        <div class="title">
            <h2> Edit Article:</h2>
            <span class="byline">{{$article->titel}}</span>

        </div>

        <form method="post" action="/articles">
            @csrf
            @method('put')

            <div class="field">
                <label for="titel" class="label">Titel</label>
            </div>
            <div class="control">
                <input type="text" class="input" id="titel" value="{{$article->titel}}">
            </div>


            <div class="field">
                <label for="description" class="label">Description</label>
            </div>
            <div class="control">
                <textarea name="description" cols="58" id="description" class="textarea">{{$article->description}}</textarea>
            </div>

            <div class="field">
                <label for="img" class="label">Image Url</label>
            </div>
            <div class="control">
                <input type="text" class="input" id="img" value="{{$article->img}}">
            </div>

            <div class="field">
                <label for="viewable" class="label">viewable?</label>
            </div>
            <div class="control">
                <input type="checkbox" name="viewable"  value="1" {{($article->viewable) ? 'checked="checked"' : ''}}/>
            </div>

            <div class="field is-grouped"></div>
            <dic class="control">
                <button class="button is-link" type="submit">Update</button>
            </dic>
        </form>

    </div>
</div>


@endsection
