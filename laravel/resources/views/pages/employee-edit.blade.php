@extends('layouts.main-layout')

@section('content')


	<form action="{{ route('employee-update', $employee -> id) }}" method="post">

		@csrf
		@method('POST')

		<label for="name">Firstname</label>
		<input name="name" type="text" value="{{ $employee -> name }}">

		<br>

		<label for="lastname">Lastname</label>
		<input name="lastname" type="text" value="{{ $employee -> lastname }}">

		<br>

		<label for="dateOfBirth">Date of Birth</label>
		<input name="dateOfBirth" type="text" value="{{ $employee -> dateOfBirth }}">

		<br>

		<input type="submit" value="Salva">

	</form>

@endsection
