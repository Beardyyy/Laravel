@extends('layout')

@section('content')
    <div class="row">
    <div class="box">
    <div class="col-md-12">
        <h3 class="brand">Create a post</h3>


        <form class="form-horizontal" method="POST" action="/update/{{ $post->id }}">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="form-group">
                <label class="control-label col-sm-2" for="title">Titile:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="title" value="{{ $post->title }}" name="title" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="subTitle">Sub-titile:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="title" value="{{ $post->subTitle }}" name="subTitle" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="body" name="body">Body:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="body" value="{{ $post->body }}" name="body">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="img" name="img">Image:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="body" value="{{ $post->img }}" name="img">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Publish</button>
                </div>
            </div>

            <div class="form-group">
                <a href="http://localhost:8000/edit/{{ $post->id }}" class="btn btn-default btn-lg">back</a>
            </div>
        </form>


    </div>
    </div>
    </div>


    @endsection