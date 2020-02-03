@extends('frontend.layouts.layout')
@section('pagecontent')
<!-- sign-up  -->

	<div class="signup-form">
		<form action="" method="post">
			<h2>Register</h2>
			<div class="form-group">
				<input type="text" class="form-control" name="name" placeholder="Name" required="required">
			</div>
			<div class="form-group">
				<input type="email" class="form-control" name="email" placeholder="Email" required="required">
			</div>
			<div class="form-group">
				<input type="password" class="form-control" name="password" placeholder="Password" required="required">
			</div>
			<div class="form-group">
				<input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required="required">
			</div>
			<div class="form-group">
			<select class="form-control">
				<option>Default select</option>
			  </select>
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="language" placeholder="language (can add multiple seperated by , )" required="required">
			</div>

			<div class="form-group">
				<input type="text" class="form-control" name="location" placeholder="location" required="required">
			</div>

			<div class="form-group">
				<textarea name="description"  id="exampleFormControlTextarea2" cols="20" rows="3" class="form-control" placeholder="Bio (Description)" required="required"></textarea>
			</div>

			<div class="form-group">
				<label class="checkbox-inline"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-success btn-lg btn-block">Register Now</button>
			</div>
		</form>
		<div class="text-center">Already have an account? <a href="#">Sign in</a></div>
	</div>
	<!-- /sign-up  -->

@endsection
