@extends('layouts.admin')

@section('content')
<h1>Media</h1>
<div class="col-12">

  <table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Created at</th>
        <th>Update</th>
      </tr>
    </thead>
    <tbody>

      @if($photos)

        @foreach ($photos as $photo)
          <tr>
            <td>{{$photo->id}}</td>
            <td><img height = "100" src="{{$photo->file ? $photo->file : 'http://placehold.it/300x300'}}" alt=""></td>
            <td>{{$photo->created_at ? $photo->created_at->diffForhumans() : 'no date'}}</td>
            <td>{{$photo->updated_at->diffForhumans()}}</td>
            <td>
              {!! Form::open(['method'=>'DELETE', 'action'=> ['AdminMediasController@destroy', $photo->id]]) !!}
                <div class="form-group">
                  {!! Form::submit('Delete Photo', ['class'=>'btn btn-danger']) !!}
                </div>
              {!! Form::close() !!}
            </td>
          </tr>
        @endforeach

      @endif

    </tbody>
  </table>
</div>


@stop