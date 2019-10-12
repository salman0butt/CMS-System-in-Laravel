@extends('layouts.admin')

@section('content')

<h1>Media</h1>
 <table class="table">
         <thead>
         <tr>
             <td>Id</td>
             <td>Name</td>
             <td>Created</td>
             <td>Updated</td>
             <td>Actions</td>
         </tr>
         </thead>
         <tbody>
         @if($photos)
             @foreach($photos as $photo)
         <tr>
             <td>{{$photo->id}}</td>
             <td><img src="{{$photo->file}}" width="50"></td>
             <td>{{$photo->created_at->diffForHumans()}}</td>
             <td>{{$photo->updated_at->diffForHumans()}}</td>
             <td>
                  {!! Form::open(['method'=>'Delete', 'action'=>['AdminMediasController@destroy', $photo->id]]) !!}
                      <div class="form-group">
                          {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                      </div>
                  {!! Form::close() !!}
             </td>
         </tr>
         @endforeach
             @endif
         </tbody>
     </table>


@endsection

