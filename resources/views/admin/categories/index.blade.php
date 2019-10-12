@extends('layouts.admin')


@section('content')

 <h1>Categories</h1>
 @if (session('created'))
     <div class="alert alert-success">
         {{ session('created') }}
     </div>
 @endif
 @if (session('updeted'))
     <div class="alert alert-success">
         {{ session('updated') }}
     </div>
 @endif
 @if (session('deleted'))
     <div class="alert alert-danger">
         {{ session('deleted') }}
     </div>
 @endif
 <div class="col-sm-6">
  {!! Form::open(['method'=>'POST', 'action'=>'AdminCategoriesController@store','files'=>true]) !!}
      <div class="form-group">
          {!! Form::label('name', 'Name:') !!}
          {!! Form::text('name', null ,['class' =>'form-control']) !!}
      </div>
      <div class="form-group">
          {!! Form::submit('Create Category', ['class'=>'btn btn-primary']) !!}
      </div>
      {!! Form::close() !!}
 </div>

 <div class="col-sm-6">
 <table class="table">
         <thead>
         <tr>
             <td>id</td>
             <td>Name</td>
             <td>Create_at</td>
             <td>Updated_at</td>
         </tr>
         </thead>
         <tbody>
         @if($categories)
          @foreach($categories as $catgory)
         <tr>
             <td>{{$catgory->id}}</td>
             <td><a href="{{route('admin.categories.edit',$catgory->id)}}">{{$catgory->name}}</a></td>
             <td>{{$catgory->created_at->diffForHumans()}}</td>
             <td>{{$catgory->updated_at->diffForHumans()}}</td>
         </tr>
           @endforeach
          @endif
         </tbody>
     </table>
 </div>


@stop



