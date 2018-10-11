@extends('layouts.admin')


@section('content')
	
	<h1>Creat users</h1>
	
	{!! Form::open(['method'=>'Post', 'action'=>'AdminUsersController@store', 'files'=>true]) !!}
	{{csrf_field()}}
	<div class="form-group">
	{!! Form::label('name', 'Name') !!}
	{!! Form::text('name',null,['class'=>'form-control']) !!}
	</div>
	
	<div class="form-group">
	{!! Form::label('email', 'Email') !!}
	{!! Form::email('email',null,['class'=>'form-control']) !!}
	</div>
	
	<div class="form-group">
	{!! Form::label('role_id', 'Role') !!}
	{!! Form::select('role_id',[''=>'Chose options'] + $roles,null,['class'=>'form-control']) !!}
	</div>
	
	<div class="form-group">
	{!! Form::label('isActive', 'Status') !!}
	{!! Form::select('isActive',array(1=>'Active', 0=>'Not Active'),0,['class'=>'form-control']) !!}
	</div>
	
	<div class="form-group">
	{!! Form::label('photo_id', 'Photo') !!}
	{!! Form::file('photo_id',null,['class'=>'form-control']) !!}
	</div>
	
	<div class="form-group">
	{!! Form::label('password', 'Password') !!}
	{!! Form::password('password',['class'=>'form-control']) !!}
	</div>
	
	<div class="form-group">
		{!! Form::submit('Create User',['class'=>'btn btn-primary']) !!}
	</div>
	
	@include('includes.form_error')

@endsection