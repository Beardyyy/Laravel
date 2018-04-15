@extends('layout')

@section('content')

    <div class="pg-faded p-4 my-4">
        <h3 class="brand">Delete post</h3>



        @foreach($posts as $post)

            <h4>{{ $post->title }}</h4>
            <form method="POST" action="{{ url('delete' , $post->id ) }}" accept-charset="UTF-8">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <input class="btn btn-danger" type="submit" value="Delete">
            </form>
                <br>
            <a href="{{ url('edit', $post->id) }}">edit</a>
            @endforeach

    </div>


@endsection