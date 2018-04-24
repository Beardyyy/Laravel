@extends('layout')

@section('content')

    <div class="pg-faded p-4 my-4">
        <h3 class="brand">Create a post</h3>


        <form class="form-horizontal" method="POST" action="/create"  enctype="multipart/form-data">
            {{ csrf_field() }}
            

            <div class="form-group">
                <label class="control-label col-sm-2" for="img" name="img">Image:</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" id="file" name="file">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Publish</button>
                </div>
            </div>

            <div class="form-group">
                <a href="http://localhost:8000/blog" class="btn btn-default btn-lg">back</a>
            </div>
        </form>


    </div>

@endsection