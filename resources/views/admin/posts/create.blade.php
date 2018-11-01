@extends('layouts.admin')


@section('content')

<h3 class="text-center"> Create Posts</h3>

<div class="row">{!! Form::open(['method'=>'Post', 'action'=>'AdminPostsController@store', 'files'=>true]) !!}
		{{csrf_field()}}
		
		<div class="form-group">
		{!! Form::label('title', 'Title') !!}
		{!! Form::text('title',null,['class'=>'form-control']) !!}
		</div>
		
		<div class="form-group">
		{!! Form::label('category_id', 'Category') !!}
		{!! Form::select('category_id',[''=>'Choose categories'] + $category,null,['class'=>'form-control']) !!}
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
			{!! Form::submit('Create Post',['class'=>'btn btn-primary']) !!}
		</div>
		
	{!! Form::close() !!}</div>

<div class="row">@include('includes.form_error')
		</div>

@stop