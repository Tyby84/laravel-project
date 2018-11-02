@extends('layouts.admin')

@section('content')

<div class="col-sm-6">
	
	{!! Form::open(['method'=>'POST', 'action'=>'AdminCategoriesController@store']) !!}
		<div class="form-group">
			{!! Form::label('name', 'Name') !!}
			{!! Form::text('name', null, ['class'=>'form-controll']) !!}
		</div>
		<div class="form-group">
			{!! Form::submit('Create category', ['class'=>'btn btn-primary']) !!}
		</div>
	
	
	{!! Form::close() !!}
	
</div>

<div class="col-sm-6">
		@if($categories)
		<table class="table">
			
			<thead>
				<tr>
					<td>Id</td>
					<td>Name</td>
					<td>Created date</td>
				</tr>
				
				<tbody>
				@foreach($categories as $cat)
				<tr>
				<td>{{$cat->id}}</td>
				<td><a href="{{route('admin.categories.edit',$cat->id)}}">{{$cat->name}}</a></td>
				<td>{{$cat->created_at ? $cat->created_at->diffForHumans() : 'No Date'}}</td>
					</tr>
				@endforeach		
				</tbody>
				
			</thead>
			
		</table>
		@endif
</div>




@stop