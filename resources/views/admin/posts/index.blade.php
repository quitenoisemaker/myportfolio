@extends('layouts.admin')


@section('content')

<h2>Users Post</h2>


<div class="table-responsive">
<table class="table table-bordered table-hover table-dark">
		<tr>
			<th>Id</th>
			<th>Photo</th>
			<th>Owner</th>
			<th>Category</th>
			<th>Title</th>
			<th>Body</th>
			<th>Post link</th>
			<th>Comments</th>
			<th>created</th>
			<th>updated</th>
		</tr>

		@if($posts)

		@foreach($posts as $post)

		<tr>
			<td>{{$post->id}}</td>
			<td><img height="50" src="{{$post->photo ? $post->photo->file : 'no user photo'}}"></td>
			<td><a href="{{route('posts.edit', $post->id)}}">{{$post->user->name}}</a></td>
			<td>{{$post->category ? $post->category->name : 'Uncategorized'}}</td>
			<td>{{$post->title}}</td>
			<td>{{$post->body}}</td>
			<td></td>
			<td></td>
			<td>{{$post->created_at->diffForHumans()}}</td>
			<td>{{$post->updated_at->diffForHumans()}}</td>
		</tr>

		@endforeach

		@endif

	
			
	</table>
</div>

@stop