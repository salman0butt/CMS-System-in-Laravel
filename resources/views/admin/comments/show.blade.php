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
                <th>Link</th>
                <th>Actions</th>
                <th>Delete</th>
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
                    <td>
                        @if ($comment->is_active == 1)
                            {!! Form::open(['method'=>'PATCH', 'action'=>['PostCommentsController@update',$comment->id]]) !!}
                            <input type="hidden" name="is_active" value="0">
                            <div class="form-group">
                                {!! Form::submit('Un-approve', ['class'=>'btn btn-success']) !!}
                            </div>
                            {!! Form::close() !!}
                        @else
                            {!! Form::open(['method'=>'PATCH', 'action'=>['PostCommentsController@update',$comment->id]]) !!}
                            <input type="hidden" name="is_active" value="1">
                            <div class="form-group">
                                {!! Form::submit('Approve', ['class'=>'btn btn-info']) !!}
                            </div>
                            {!! Form::close() !!}

                        @endif

                    </td>
                    <td>
                        {!! Form::open(['method'=>'DELETE', 'action'=>['PostCommentsController@destroy',$comment->id]]) !!}
                        <input type="hidden" name="is_active" value="1">
                        <div class="form-group">
                            {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
                    @endforeach
            </tbody>
        </table>


    @else
        <h1 class="text-muted text-center">No Comments</h1>
    @endif
@endsection