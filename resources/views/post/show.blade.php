@extends('layouts.main')
@section('content')

    <div>
            <div>{{$post->id}}.{{$post->title}}</div>
            <div>{{$post->content}}</div>
    </div>
    <div>
        <a href="{{route('posts.edit', $post->id)}}">Edit</a>
    </div>
    <div>
        <a href="{{route('posts.index')}}">Back</a>
    </div>
@endsection
