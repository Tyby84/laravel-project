@extends('layouts.admin')


@section('content')
	
	<h1>Deleting user</h1>
	
	<div class="row">
		<div class="col-sm-3">
			
			<img src="{{($user->photo) ? $user->photo->file : 'http://placehold.it/400x400'}}" alt="" class="img-responsive img-circle">
			
		</div>
		
		<div class="col-sm-9">
			{!! Form::model($user,['method'=>'DELETE', 'action'=>['AdminUsersController@destroy', $user->id], 'files'=>true]) !!}
			
			
			<div class="form-group">
				{!! Form::submit('Delete User',['class'=>'btn btn-danger']) !!}
			</div>
		</div>
	</div>
	
	<div class="row">@include('includes.form_error')</div>

@endsection