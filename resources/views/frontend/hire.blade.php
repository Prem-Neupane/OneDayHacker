@extends('frontend.layouts.layout')
@section('pagecontent')
<div class="container padding">
		<div class="container-fluid padding">
		<div class="row welcome text-center">

			<div class="col-12">
				<h1 class="display-4">Hiring Form</h1>
				<hr class="horizon">
				<h3  id="htitle">Enter Your Details</h3>
			</div>
		</div>
    </div>
    <div id="hform">
		<form  class="hire-form"  onsubmit="success()">
		  <div class="form-row">
		    <div class="form-group col-md-6">
		      <label for="fName">First Name</label>
		      <input type="text" class="form-control" id="fName" required placeholder="First Name">
		    </div>
		    <div class="form-group col-md-6">
		      <label for="lName">Last Name</label>
		      <input type="text" class="form-control" id="lName" required placeholder="Last Name">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="contack">Contact</label>
		    <input type="string" class="form-control" id="contact" required placeholder="98XXXXXXXX">
		  </div>

		    <div class="form-group">
		      <label for="vtime">Visit Interval</label>
		      <input type="number" min="1" class="form-control" id="vtime" required placeholder="In days">
		    </div>
		  <button type="submit" class="btn btn-success btn-lg">Confirm</button>
        </form>
        </div>
	</div>
@endsection

@section('scripts')
    <script>
        function success(){
            document.getElementById('hform').innerHTML = '<div class="alert alert-success" role="alert"> Success! The guide you hired will contact you soon! </div>';
            document.getElementById('htitle').innerHTML = '';
        }
</script>
@endsection
