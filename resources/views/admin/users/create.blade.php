@extends('layouts.admin')

@section('content')

<h2>Create User</h2>


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


{!! Form::open(['method'=>'post', 'action'=> 'AdminUsersController@store', 'files'=>true]) !!}
 
 <div class="form-group">
 	{!! Form::label('name', 'Name:')!!}
 	{!! Form::text('name', null, ['class'=>'form-control'])!!}

 </div>
 <div class="form-group">
  {!! Form::label('email', 'Email:')!!}
  {!! Form::email('email', null, ['class'=>'form-control'])!!}

 </div>
 <div class="form-group">
  {!! Form::label('role_id')!!}
  {!! Form::select('role_id',[''=>'Choose Options'] + $roles, null, ['class'=>'form-control'])!!}

 </div>
 <div class="form-group">
  {!! Form::label('is_active', 'Status:')!!}
  {!! Form::select('is_active', array(1=>'Active', 0=>'Not Active'), 0 , ['class'=>'form-control'])!!}

 </div>



 <div class="form-group">
  {!! Form::label('password', 'Password:')!!}
  {!! Form::password('password', ['class'=>'form-control'])!!}

 </div>

 <div class="form-group">
 	{!! Form::submit('Create User', ['class'=>'btn btn-primary'])!!}
 </div>
 {!! Form::close() !!}

@stop