@extends('layouts.admin')


@section('content')

<h3 class="text-center">Posts</h3>
	<table class="table">
		<thead>
			<tr>
			<tr>
				<td>Id</td>
				<td>Owner</td>
				<td>Category</td>
				<td>Photo</td>
				<td>Title</td>
				<td>Body</td>
				<td>Created</td>
				<td>Updated</td>
			</tr>
		</thead>
	<tbody>
	@if($posts)
	@foreach($posts as $post)
	<tr>
		<td>{{$post->id}}</td>
		<td>{{$post->user->name}}</td>
		<td>{{$post->category ? $post->category->name : 'Uncategorized' }}</td>
		<td><img src="{{$post->photo->file}}" alt="pic"> </td>
		<td>{{$post->title}}</td>
		<td>{{$post->body}}</td>
		<td>{{$post->created_at->diffForhumans()}}</td>
		<td>{{$post->updated_at->diffForhumans()}}</td>
	</tr>
	
	@endforeach
	@endif
	</tbody>
	</table>
@stop