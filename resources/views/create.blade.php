@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="box">
<div class="pg-faded p-4 my-4">
    <h3 class="brand">Create a post</h3>


    <form class="form-horizontal" method="POST" action="/create" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label class="control-label col-sm-2" for="title">Titile:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="title" placeholder="Enter title" name="title" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="subTitle">Sub-titile:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="title" placeholder="Enter sub-title" name="subTitle" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="body" name="body">Body:</label>
            <div class="col-sm-10">
                 <textarea name="body" class="form-control" placeholder="Enter text" rows="3" cols="30"></textarea>
            </div>
        </div>


        <div class="form-group">
            <label class="control-label col-sm-2" for="file" name="file">Image:</label>
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
            <a href="http://localhost:8000/blog" class="btn btn-warning btn-lg">back</a>
        </div>
    </form>


</div>
</div>
</div>
</div>

    @endsection