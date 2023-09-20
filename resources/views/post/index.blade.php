@extends('layouts.main')
@section('content')
    <div>
        <div>
            <a href="{{route('posts.create')}}" class="btn btn-primary">Add one</a>
        </div>
        @foreach($posts as $post)
            <div>
                <a href="{{route('posts.show',$post->id)}}">{{$post->id}}.{{$post->title}} - {{$post->category_id}}</a>
            </div>
        @endforeach
        <div>
            {{$posts->withQueryString()->links()}}
        </div>

    </div>
@endsection
