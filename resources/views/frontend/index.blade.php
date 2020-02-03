@extends('frontend.layouts.layout')
@section('pagecontent')
	<!-- Slider -->
	<div id="slides" class="carousel slide" data-ride="carousel">
		<ul class="carousel-indicators">
			<li data-target="#slides" data-slide-to="0" class="active"> </li>
			<li data-target="#slides" data-slide-to="1"> </li>
			<li data-target="#slides" data-slide-to="2"> </li>
		</ul>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="{{URL::asset('frontend/img/banner1.jpg')}}">

			</div>
			<div class="carousel-item">
				<img src="{{URL::asset('frontend/img/banner2.jpg')}}">

			</div>
			<div class="carousel-item">
				<img src="{{URL::asset('frontend/img/banner3.jpg')}}">

			</div>
		</div>

	</div>
	<!-- /Slider -->
	<hr class="light" id="topP">

	<!-- Searchbar -->
	<!-- /Searchbar -->
	<!-- Top places -->
	<div class="container-fluid padding">
		<div class="row welcome text-center">
			<div class="col-12">
				<h1 class="display-4">Top Places</h1>
				<hr class="horizon">
			</div>
		</div>
	</div>

	<div class="container-fluid padding">
		<div class="row padding">
            @isset($topPlaces)
            @foreach ($topPlaces as $place)
			<div class="col-md-4 col-sm-4">
				<div class="card">
					<img class="card-img-top" src="{{$place->feature_image}}">
					<div class="card-body">
						<div class="row">
							<h4 class="card-title">{{$place->title}}</h4>
							<div class="rating">
								<img src="{{URL::asset('frontend/img/full.png')}}">
								<img src="{{URL::asset('frontend/img/full.png')}}">
								<img src="{{URL::asset('frontend/img/full.png')}}">
								<img src="{{URL::asset('frontend/img/full.png')}}">
								<img src="{{URL::asset('frontend/img/half.png')}}">
							</div>
						</div>
						<a href="{{URL::asset('/place/'.$place->id)}}" class="btn btn-outline-secondary">Explore</a>
					</div>
				</div>
            </div>
             @endforeach
            @endisset
            {{-- <div class="col-md-4 col-sm-4">
				<div class="card">
					<img class="card-img-top" src="{{URL::asset('frontend/img/top1.jpg')}}">
					<div class="card-body">
						<div class="row">
							<h4 class="card-title"> Pokhara </h4>
							<div class="rating">
								<img src="{{URL::asset('frontend/img/full.png')}}">
								<img src="{{URL::asset('frontend/img/full.png')}}">
								<img src="{{URL::asset('frontend/img/full.png')}}">
								<img src="{{URL::asset('frontend/img/full.png')}}">
								<img src="{{URL::asset('frontend/img/full.png')}}">
							</div>
						</div>
						<a href="#" class="btn btn-outline-secondary">Explore</a>
					</div>
				</div>
            </div>
                <div class="col-md-4 col-sm-4">
				<div class="card">
					<img class="card-img-top" src="{{URL::asset('frontend/img/top2.jpg')}}">
					<div class="card-body">
						<div class="row">
							<h4 class="card-title"> Chitwan </h4>
							<div class="rating">
								<img src="{{URL::asset('frontend/img/full.png')}}">
								<img src="{{URL::asset('frontend/img/full.png')}}">
								<img src="{{URL::asset('frontend/img/full.png')}}">
								<img src="{{URL::asset('frontend/img/full.png')}}">
								<img src="{{URL::asset('frontend/img/empty.png')}}">
							</div>
						</div>
						<a href="#" class="btn btn-outline-secondary">Explore</a>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-4">
				<div class="card">
					<img class="card-img-top" src="{{URL::asset('frontend/img/top3.jpg')}}">
					<div class="card-body">
						<div class="row">
							<h4 class="card-title"> Manang </h4>
							<div class="rating">
								<img src="{{URL::asset('frontend/img/full.png')}}">
								<img src="{{URL::asset('frontend/img/full.png')}}">
								<img src="{{URL::asset('frontend/img/full.png')}}">
								<img src="{{URL::asset('frontend/img/full.png')}}">
								<img src="{{URL::asset('frontend/img/empty.png')}}">
							</div>
						</div>
						<a href="#" class="btn btn-outline-secondary">Explore</a>
					</div>
				</div>
			</div> --}}
		</div>
	</div>

	<!-- /Top places -->

	<!-- Top guides -->

	<!-- Top places -->
	<hr class="light" id="topG">
	<div class="container-fluid padding">
		<div class="row welcome text-center">
			<div class="col-12">
				<h1 class="display-4">Top Guides</h1>
				<hr class="horizon">
			</div>
		</div>
	</div>

	<div class="container-fluid padding">
		<div class="row padding">
            @isset($topGuides)
            @foreach ($topGuides as $guide)
			<div class="col-md-3 col-sm-6">
				<div class="card">
					<img class="rounded-circle card-img-top" src="{{$guide->image}}">
					<div class="card-body">
						<h4 class="card-title"> {{$guide->name }}</h4>
						<div class="rating">
							<img src="{{URL::asset('frontend/img/full.png')}}">
							<img src="{{URL::asset('frontend/img/full.png')}}">
							<img src="{{URL::asset('frontend/img/full.png')}}">
							<img src="{{URL::asset('frontend/img/full.png')}}">
							<img src="{{URL::asset('frontend/img/full.png')}}">
						</div>
						<a href="{{URL::asset('/guide/'.$guide->id)}}" class="btn btn-outline-secondary">View Profile</a>
					</div>
				</div>
            </div>
            @endforeach
            @endisset
			{{-- <div class="col-md-3 col-sm-6">
				<div class="card">
					<img class="rounded-circle  card-img-top" src="{{URL::asset('frontend/img/guide2.png')}}">
					<div class="card-body">
						<h4 class="card-title"> Prem Neupane </h4>
						<div class="rating">
							<img src="{{URL::asset('frontend/img/full.png')}}">
							<img src="{{URL::asset('frontend/img/full.png')}}">
							<img src="{{URL::asset('frontend/img/full.png')}}">
							<img src="{{URL::asset('frontend/img/full.png')}}">
							<img src="{{URL::asset('frontend/img/half.png')}}">
						</div>
						<a href="#" class="btn btn-outline-secondary">View Profile</a>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="card">
					<img class="rounded-circle card-img-top" src="{{URL::asset('frontend/img/guide3.png')}}">
					<div class="card-body">
						<h4 class="card-title"> Manohar Shrestha </h4>
						<div class="rating">
							<img src="{{URL::asset('frontend/img/full.png')}}">
							<img src="{{URL::asset('frontend/img/full.png')}}">
							<img src="{{URL::asset('frontend/img/full.png')}}">
							<img src="{{URL::asset('frontend/img/full.png')}}">
							<img src="{{URL::asset('frontend/img/half.png')}}">
						</div>
						<a href="#" class="btn btn-outline-secondary">View Profile</a>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="card">
					<img class="rounded-circle card-img-top" src="{{URL::asset('frontend/img/guide4.png')}}">
					<div class="card-body">
						<h4 class="card-title"> Anil Baral</h4>
						<div class="rating">
							<img src="{{URL::asset('frontend/img/full.png')}}">
							<img src="{{URL::asset('frontend/img/full.png')}}">
							<img src="{{URL::asset('frontend/img/full.png')}}">
							<img src="{{URL::asset('frontend/img/full.png')}}">
							<img src="{{URL::asset('frontend/img/half.png')}}">
						</div>
						<a href="#" class="btn btn-outline-secondary">View Profile</a>
					</div>
				</div>
			</div> --}}
		</div>
    </div>
    <!-- helpline -->
	<div class="jumbotron">
		<h1 class="display-4 text-center">Top Guides</h1>
		<hr class="horizon">
		<div class="row text-center">
			<div class="col-md-4"> Helpline Number : 123-456-789</div>
			<div class="col-md-4"> Transportation Helpline : 123-456-789</div>
			<div class="col-md-4"> Embassy Number : 123-456-789</div>
		</div>

	</div>

	@endsection
