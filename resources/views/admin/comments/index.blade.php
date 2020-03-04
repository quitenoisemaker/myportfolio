@extends('layouts.admin')


@section('content')

<h2>All comment</h2>

<div class="table-responsive">
<table class="table table-bordered table-hover">
		<tr>
			<th>Id</th>
			<th>Author</th>
			<th>Email</th>
			<th>Body</th>
			<th>Created</th>
		</tr>

		@foreach($comments as $comment)

		<tr>
			<td>{{$comment->id}}</td>
			<td>{{$comment->author}}</td>
			<td>{{$comment->email}}</td>
			<td>{{$comment->body}}</td>
			<td>{{$comment->created_at->diffForHumans()}}</td>
			<td><a href="{{route('blog.post', $comment->post->id)}}">View post</a></td>
			<td><a href="{{route('replies.show', $comment->id)}}">View replies</a></td>

			<td>
				@if($comment->is_active==1)


				{!! Form::open(['method'=>'PATCH', 'action'=> ['PostCommentsController@update', $comment->id]]) !!}

				<input type="hidden" name="is_active" value="0">
 
				 <div class="form-group">
  				{!! Form::submit('Un-approve', ['class'=>'btn btn-danger'])!!}
 				</div>
 				{!! Form::close() !!}


 				@else

 				{!! Form::open(['method'=>'PATCH', 'action'=> ['PostCommentsController@update', $comment->id]]) !!}

				<input type="hidden" name="is_active" value="1">
 
				 <div class="form-group">
  				{!! Form::submit('Approve', ['class'=>'btn btn-success'])!!}
 				</div>
 				{!! Form::close() !!}


				@endif
			</td>

			<td>

				{!! Form::open(['method'=>'DELETE', 'action'=> ['PostCommentsController@destroy', $comment->id]]) !!}
 
				 <div class="form-group">
  				{!! Form::submit('Delete', ['class'=>'btn btn-danger'])!!}
 				</div>
 				{!! Form::close() !!}
				
			</td>
		</tr>
		@endforeach
			
	</table>
</div>


@stop