@extends('layouts.admin')


@section('content')

<h1>Edit Posts</h1>


 <!-- To show the error message -->
@if(count($errors)>0)

<div class="alert alert-danger">
  <ul>
    @foreach($errors->all() as $error)

    <li>{{$error}}</li>

    @endforeach
  </ul>
</div>

@endif


<div class="col-sm-3">
<img height="150" src="{{$post->photo ? $post->photo->file : 'No photo'}}" class="img-responsive img-rounded">
</div>

<div class="col-sm-9">
{!! Form::model($post, ['method'=>'PATCH', 'action'=> ['AdminPostController@update', $post->id], 'files'=>true]) !!}
 
 <div class="form-group">
  {!! Form::label('title', 'Title:')!!}
  {!! Form::text('title', null, ['class'=>'form-control'])!!}

 </div>


  <div class="form-group">
  {!! Form::label('category_id', 'Category:')!!}
  {!! Form::select('category_id', $categories, null, ['class'=>'form-control'])!!}

 </div>

 <div class="form-group">
  {!! Form::label('photo_id', 'Photo:')!!}
  {!! Form::file('photo_id', ['class'=>''])!!}

 </div>


 <div class="form-group">
  {!! Form::label('body', 'Description:')!!}
  {!! Form::textarea('body', null, ['class'=>'form-control'])!!}

 </div>


 <div class="form-group">
  {!! Form::submit('Update Post', ['class'=>'btn btn-primary'])!!}
 </div>
 {!! Form::close() !!}

 <div class="" style="margin-top: -52px; text-align: right">
 {!! Form::open(['method'=>'DELETE', 'action'=> ['AdminPostController@destroy', $post->id]]) !!}

 <div class="form-group">
  {!! Form::submit('Delete Post', ['class'=>'btn btn-danger'])!!}
 </div>


 {!! Form::close() !!}
</div>
</div>


@stop