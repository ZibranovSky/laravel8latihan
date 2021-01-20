@extends('template')

@section('content')

<div class="jumbotron mt-3">
	

	<form action="{{ route('login.submit') }}" method="post">
		@csrf
		
		
		<div class="form-group">
		<label>Email</label>
		<input type="text" class="form-control"  name="email">
	</div>
	<div class="form-group">
		<label>Password</label>
		<input type="text" class="form-control"  name="password">
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-primary">login</button>
	</div>
	</form>
</div>

@endsection