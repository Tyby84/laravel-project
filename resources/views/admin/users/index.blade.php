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
        <th>Role</th>
        <th>Active</th>
        <th>Created</th>
        <th>Updated</th>
      </tr>
    </thead>
    @if($users)
    @foreach($users as $user)
    <tbody>
      <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->role->name}}</td>
        
        <td>
		  <!--@if($user->isActive == 1)
     		Active
     		@else
     		Not Active
     		@endif-->
      		{{$user->isActive == 1 ? 'Active' : 'Not Active'}}
       </td>
        
        <td>{{$user->created_at->diffForHumans()}}</td>
        <td>{{$user->updated_at->diffForHumans()}}</td>
        
      </tr>
      
    </tbody>
    @endforeach
    @endif
  </table>
</div>


@endsection