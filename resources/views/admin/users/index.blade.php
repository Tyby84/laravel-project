@extends('layouts.admin')


@section('content')


<h1>Users</h1>
	
	
	
	<div class="container">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        
        <th>Active</th>
        <th>HasPicture</th>
        <th>Created</th>
        <th>Avatar</th>
      </tr>
    </thead>
    @if($users)
    @foreach($users as $user)
    <tbody>
      <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        
        <td>
		  <!--@if($user->isActive == 1)
     		Active
     		@else
     		Not Active
     		@endif-->
      		{{$user->isActive == 1 ? 'Active' : 'Not Active'}}
       </td>
       <td>
       	{{isset($user->photo->file) ? 'Has Photo' : 'Has no photo'}}
       </td>
        
        <td>{{$user->created_at->diffForHumans()}}</td>
        <td>
        	@if(isset($user->photo->file))
        	 <img src="{{$user->photo->file}}" alt="Pic" height="50px" width="50px">
        	
        	@else
        	'No Avatar yet..'
        	@endif
        </td>
        
      </tr>
      
    </tbody>
    @endforeach
    @endif
  </table>
</div>


@endsection