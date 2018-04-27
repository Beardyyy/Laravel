@extends('layout')


@section('content')


    <div class="container">

        <div class="row">
            <div class="box">

                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Company
                        <strong>blog</strong>
                    </h2>
                    <hr>
                </div>

                    <div class="col-lg-12 text-center">
                        <img class="img-responsive img-border img-full" src="{{ asset($post->img) }}" alt="">
                        <h2>{{ $post->title }}
                            <br>
                            <small>{{ $post->created_at->toDateString() }}</small>
                        </h2>
                        <p>{{ $post->body }}</p>
                        <a href="http://localhost:8000/blog" class="btn btn-warning btn-lg">Back</a>
                        <hr>
                    </div>


            </div>
        </div>

    </div>

@endsection