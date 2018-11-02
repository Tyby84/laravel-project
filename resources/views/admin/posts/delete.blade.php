@extends('layouts.admin')


@section('content')
	
	<h1>Deleting post</h1>
	
	<div class="row">
		
		
		<div class="col-sm-9">
			{!! Form::model($post,['method'=>'DELETE', 'action'=>['AdminPostsController@destroy', $post->id], 'files'=>true]) !!}
			
			
			<div class="form-group">
				{!! Form::submit('Delete Post',['class'=>'btn btn-danger']) !!}
			</div>
		</div>
	</div>
	
	<div class="row">@include('includes.form_error')</div>
	
@endsection