@extends('frontend.layouts.layout')
@section('styles')
<link rel="stylesheet" type="text/css" href="{{URL::asset('frontend/css/style-sign-up.css')}}">
    {{-- <link rel="stylesheet" type="text/css" href="{{URL::asset('frontend/css/style-sign-in.css')}}"> --}}
@endsection
@section('pagecontent')

	<div class="signup-form">
		<form action="" method="post">
			<h2>Login</h2>
			<div class="form-group">
				<input type="text" class="form-control" name="name" placeholder="Name" required="required">
			</div>

			<div class="form-group">
				<input type="password" class="form-control" name="password" placeholder="Password" required="required">
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-success btn-lg btn-block">Login</button>
			</div>
		</form>
	</div>
	<!-- /sign-up  -->
@endsection
