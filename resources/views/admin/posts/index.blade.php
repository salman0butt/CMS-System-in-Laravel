@extends('layouts.admin')


@section('content')

<h1>Posts</h1>

    <table class="table">
        <thead>
        <tr>
            <td>id</td>
            <td>photo</td>
            <td>User</td>
            <td>Category</td>
            <td>Title</td>
            <td>Description</td>
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
            <td>{{ $post->user->name }}</td>
            <td>{{ ($post->category ? $post->category->name : 'Uncategorized') }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->body }}</td>
            <td>{{ $post->created_at->diffForHumans() }}</td>
            <td>{{ $post->updated_at->diffForHumans() }}</td>
        </tr>
        @endforeach
        @endif
        </tbody>
    </table>

@stop