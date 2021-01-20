@extends('template')

@section('content')

<div class="jumbotron mt-3">
	

	<form action="{{ route('kalkulator.submit') }}" method="post">
		@csrf
		
		
		<div class="form-group">
		<label>Angka Pertama</label>
		<input type="text" class="form-control"  name="angka1">
	</div>
	<div class="form-group">
		<label>Angka Kedua</label>
		<input type="text" class="form-control"  name="angka2">
	</div>
	<div class="form-group">
		<label>Simbol Hitung</label>
		<select name="simbol" class="form-control">
			<option  value="+">+</option>
			<option  value="-">-</option>
			<option  value="/">/</option>
			<option  value="*">*</option>

		</select>
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-primary">login</button>
	</div>
	</form>
</div>

@endsection