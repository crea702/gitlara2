@extends('layouts.main')
@section('content')
    <div>
        <div>
            <a href="{{route('posts.create')}}" class="btn-group-sm mb-3">Add one</a>
        </div>
        @foreach($posts as $post)
            <div>
                <a href="{{route('posts.show',$post->id)}}">{{$post->id}}.{{$post->title}}</a>
            </div>
        @endforeach

    </div>
@endsection
