@extends('layouts.admin')

@section('content')
    <h1>Comments</h1>
@if (count($comments) > 0)

    <table class="table table-condensed table-striped">
        <thead>
        <tr>
            <th>Id</th>
            <th>Author</th>
            <th>Email</th>
            <th>body</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
          @foreach($comments as $comment)
            <tr>
                <td>{{ $comment->id }}</td>
                <td>{{ $comment->author }}</td>
                <td>{{ $comment->email }}</td>
                <td>{{ $comment->body }}</td>
                <td><a href="{{ route('home.post', $comment->post->id) }}">View Post</a></td>
                <td></td>
            </tr>
            @endforeach
        </tbody>
    </table>
     @else
    <h1 class="text-muted text-center">No Comments</h1>
     @endif
@endsection