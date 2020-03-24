@extends('layouts.app')

@section('content')
    <a href="/webapp/public/posts" class="btn btn-default">Back</a>
    <h1>{{$post->title}}</h1>
    @if($post->cover_image !== 'noimage.jpg')
        <img style="width: 100%" src="storage/cover_images/{{$post->cover_image}}" alt="Image">
    @else
        <img style="width: 100%" src="storage/cover_images/{{$post->cover_image}}" alt="noImage">
    @endif
    <br><br>
    <div>
        {{$post->body}}
    </div>
    <hr>
    <small>Written on {{$post->created_at}}</small>
    <hr>
    @if(Auth::user())
        @if(Auth::user()->id ==  $post->user_id)
            <a href="/webapp/public/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>

            {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close() !!}
        @endif
    @endif
@endsection