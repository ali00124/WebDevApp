@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if(count($posts)>0)
        @foreach($posts as $post)
            <div class="well">
                <div class="row">
                    <div class="col-md-4 com-sm-4">
                        @if($post->cover_image !== 'noimage.jpg')
                            <img style="width: 100%" src="storage/cover_images/{{$post->cover_image}}" alt="Image">
                        @else
                            <img style="width: 100%" src="storage/cover_images/{{$post->cover_image}}" alt="noImage">
                        @endif
                        <br><br>
                    </div>
                    <div class="col-md-8 com-sm-8">
                        <h3><a href="/webapp/public/posts/{{$post->id}}">{{$post->title}}</a></h3>
                        <small>Written on {{$post->created_at}}</small>
                    </div>
                </div>
            </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p>No posts found</p>
    @endif
@endsection