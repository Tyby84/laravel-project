@extends('layouts.admin')


@section('content')
	
	<h1>Creat users</h1>
	
	{!! Form::open(['method'=>'Post', 'action'=>'AdminUsersController@store']) !!}
	
	<div class="form-group">
	{!! Form::label('name', 'Name') !!}
	{!! Form::text('name',null,['class'=>'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::submit('Create User',['class'=>'btn btn-primary']) !!}
	</div>

@endsection