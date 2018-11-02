@extends('layouts.admin')


@section('content')

<h3 class="text-center"> Edit Posts</h3>

<div class="row">{!! Form::model($post,['method'=>'PATCH', 'action'=>['AdminPostsController@update',$post->id], 'files'=>true]) !!}
		{{csrf_field()}}
		
		<div class="form-group">
		{!! Form::label('title', 'Title') !!}
		{!! Form::text('title',null,['class'=>'form-control']) !!}
		</div>
		
		<div class="form-group">
		{!! Form::label('category_id', 'Category') !!}
		{!! Form::select('category_id', $category,null,['class'=>'form-control']) !!}
		</div>
		
		<div class="form-group">
		{!! Form::label('photo_id', 'Photo') !!}
		{!! Form::file('photo_id') !!}
		</div>
		
		<div class="form-group">
		{!! Form::label('body', 'Description') !!}
		{!! Form::textarea('body',null,['class'=>'form-control', 'rows'=>3]) !!}
		</div>
		<div class="form-group">
			{!! Form::submit('Update Post',['class'=>'btn btn-primary']) !!}
		</div>
		
		{!! Form::close() !!}</div>
		<div class="col-sm-9">
			{!! Form::model($post,['method'=>'DELETE', 'action'=>['AdminPostsController@destroy', $post->id], 'files'=>true]) !!}
			
			
			<div class="form-group">
				{!! Form::submit('Delete Post',['class'=>'btn btn-danger']) !!}
			</div>
		</div>

<div class="row">@include('includes.form_error')
		</div>

@stop