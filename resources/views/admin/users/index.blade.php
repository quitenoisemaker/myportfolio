@extends('layouts.admin')


@section('content')

<h2>Users</h2>

<div class="table-responsive">

<table class="table table-bordered table-hover table-dark">
		<tr>
			<th>Id</th>
			<!-- <th>Photo</th> -->
			<th>Name</th>
			<th>Email</th>
			<th>Role</th>
			<th>Status</th>
			<th>created</th>
			<th>updated</th>
		</tr>

		@if ($users)

		@foreach ($users as $user)
		<tr>
			<td>{{$user->id}}</td>
		
			<td><a href="{{route('users.edit', $user->id)}}">{{$user->name}}</a></td>
			<td>{{$user->email}}</td>
			<td>{{$user->role->name}}</td>
			<td>{{$user->is_active == 1 ? 'Acive' : 'Not Active'}}</td>
			<td>{{$user->created_at->diffForHumans()}}</td>
			<td>{{$user->updated_at->diffForHumans()}}</td>
		</tr>

		@endforeach

		@endif

		
		
			
	</table>

	</div>

@stop