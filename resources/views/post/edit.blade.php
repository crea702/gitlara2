@extends('layouts.main')
@section('content')
    <div>
        <form action="{{route('posts.update', $post->id)}}" method="post">
            @csrf
            @method('patch')
            <div class="mb-3">
                <label for="Title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Title" value="{{$post->title}}">
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea name="content" class="form-control" id="content" placeholder="Content">{{$post->contetn}}</textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="text" name="image" class="form-control" id="image" value="{{$post->image}}" placeholder="Image">
            </div>
            <button type="submit" class="btn-group-sm">Update</button>
        </form>
    </div>


@endsection
