@extends('layouts.admin')


@section('content')

<h1>Posts</h1>

    <table class="table">
        <thead>
        <tr>
            <td>id</td>
            <td>photo</td>
            <td>Author</td>
            <td>Category</td>
            <td>Title</td>
            <td>Description</td>
            <td>Link</td>
            <td>Comments</td>
            <td>Created_at</td>
            <td>Updated_at</td>
        </tr>
        </thead>
        <tbody>
        @if($posts)
            @foreach($posts as $post)
        <tr>
            <td>{{ $post->id }}</td>
            <td><img width="50px" src="{{ $post->photo ? $post->photo->file : '400.png' }}" alt=""></td>
            <td><a href="{{ route('admin.posts.edit',$post->id) }}">{{ $post->user->name }}</a></td>
            <td>{{ ($post->category ? $post->category->name : 'Uncategorized') }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ str_limit($post->body, 30) }}</td>
            <td><a href="{{ route('home.post', $post->id) }}">View Post</a></td>
            <td><a href="{{ route('admin.comments.show', $post->id) }}">View Comments</a></td>
            <td>{{ $post->created_at->diffForHumans() }}</td>
            <td>{{ $post->updated_at->diffForHumans() }}</td>
        </tr>
        @endforeach
        @endif
        </tbody>
    </table>

@stop