@extends('template')

@section('content')

<div class="jumbotron mt-3">
	

	<form action="{{ route('dope.submit') }}" method="post">
		@csrf
		
		
		<div class="form-group">
		<label>Nama : </label>
		<input type="text" class="form-control"  name="nama">
	</div>
	<div class="form-group">
		<label>Alamat : </label>
		<input type="text" class="form-control"  name="alamat">
	</div>
	<div class="form-group">
		<label>Kontak : </label>
		<input type="text" class="form-control" name="kontak">
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-primary">login</button>
	</div>
	</form>
</div>




@endsection