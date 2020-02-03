@extends('frontend.layouts.layout')
@section('pagecontent')
	<div class="container-fluid padding">
		<div class="row welcome text-center">
			<div class="col-12">
				<h2 class="display-4">Guide Profile</h1>
				<hr>
			</div>
		</div>
	</div>

	<div class="container-fluid padding">
		<div class="row padding">
			<div class="col-md-3 col-sm-4">
				<div class="guide-card">
					<img class="rounded-circle card-img-top" src="{{$user->image}}">
				</div>
				<div class="hire text-center">
					<button class="btn btn-outline-primary btn-lg"><a href="{{route('hire',$user->id)}}"> Hire Guide </a></button>
				</div>
			</div>
			<div class="guide-details col-md-9 col-sm-8">
				<div class="card-body">
						<h4 class="title">{{$user->name}}</h4>
						<div class="rating"> <span>Ratings : </span>
							<img src="{{URL::asset('frontend/img/full.png')}}">
							<img src="{{URL::asset('frontend/img/full.png')}}">
							<img src="{{URL::asset('frontend/img/full.png')}}">
							<img src="{{URL::asset('frontend/img/full.png')}}">
							<img src="{{URL::asset('frontend/img/full.png')}}">
						</div>

                        <h5>Bio : </h5>
						<p>&emsp; &emsp; {!!$user->bio!!}</p>
						<h5>Address : </h5> <p>{{$user->location}}</p>
						<h5>Contact : </h5> <p>+977-9812345678</p>
						<h5>Email : </h5> <p>{{$user->email}}</p>
						<h5>Language : </h5> <p>{{$user->language}}</p>

					</div>

			</div>
		</div>
	</div>
@endsection
