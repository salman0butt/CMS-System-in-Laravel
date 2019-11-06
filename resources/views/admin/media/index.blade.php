@extends('layouts.admin')

@section('content')

<h1>Media</h1>
@if($photos)
    <form action="delete/media" method="POST" class="form-inline">
        {{csrf_field()}}
        {{method_field('delete')}}
        <div class="form-group">
            <select name="checkBoxArray" class="form-control">
                <option value="">Choose</option>
                <option value="">Delete</option>
            </select>
        </div>
        <div class="form-group">
            <input type="submit" name="delete_all" value="submit" class="btn btn-primary">
        </div>


 <table class="table">
         <thead>
         <tr>
             <td><input type="checkbox" id="options"></td>
             <td>Id</td>
             <td>Name</td>
             <td>Created</td>
             <td>Updated</td>
             <td>Actions</td>
         </tr>
         </thead>
         <tbody>

             @foreach($photos as $photo)
         <tr>
             <td><input type="checkbox" class="checkBoxes" name="checkBoxArray[]" value="{{ $photo->id }}"></td>
             <td>{{$photo->id}}</td>
             <td><img src="{{$photo->file}}" width="50"></td>
             <td>{{$photo->created_at->diffForHumans()}}</td>
             <td>{{$photo->updated_at->diffForHumans()}}</td>
             <td>
                 <input type="hidden" name="photo" value="{{ $photo->id }}">
                
                      <div class="form-group">
                          <input type="submit" name="delete_single" value="Delete" class="btn btn-danger">
                      </div>

             </td>
         </tr>
         @endforeach
             @endif
         </tbody>
     </table>
    </form>

@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('#options').click(function() {

                if(this.checked){

                    $('.checkBoxes').each(function () {
                        this.checked = true;
                    });
                }else{
                    $('.checkBoxes').each(function () {
                        this.checked = false;
                    })
                }
            });
        });
    </script>
@stop

