@extends('layouts.admin')

@section('content')

<div class="col-sm-6">
	
	{!! Form::model($categories,['method'=>'PATCH', 'action'=>['AdminCategoriesController@update', $categories->id]]) !!}
		<div class="form-group">
			{!! Form::label('name', 'Name') !!}
			{!! Form::text('name', null, ['class'=>'form-controll']) !!}
		</div>
		<div class="form-group">
			{!! Form::submit('Update category', ['class'=>'btn btn-primary']) !!}
		</div>
	
	
	{!! Form::close() !!}
	
</div>

<div class="col-sm-6">
		
{!! Form::model($categories,['method'=>'DELETE', 'action'=>['AdminCategoriesController@destroy', $categories->id]]) !!}
		
		<div class="form-group">
			{!! Form::submit('Delete category', ['class'=>'btn btn-danger']) !!}
		</div>
	
	
	{!! Form::close() !!}
		
</div>




@stop