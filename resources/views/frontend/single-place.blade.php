@extends('frontend.layouts.layout')
@section('pagecontent')
    <div class="container-fluid padding">
		<div class="row padding">
			<div class="col-md-6 col-sm-6">
				<div class="card">
					<img class="card-img-top" src="{{$place->feature_image}}">
					<div class="card-body">
						<div class="row">
							<h4 class="card-title">{{$place->title}} </h4>
							<div class="rating">
							<img src="{{URL::asset('frontend/img/full.png')}}">
							<img src="{{URL::asset('frontend/img/full.png')}}">
							<img src="{{URL::asset('frontend/img/full.png')}}">
							<img src="{{URL::asset('frontend/img/full.png')}}">
							<img src="{{URL::asset('frontend/img/full.png')}}">
							</div>
							<p class="description">{!!$place->description!!}</p>
						</div>
						<div class="review">
							<hr>
							<h5>Place Reviews : </h5>
							<hr>
							<h6> Tourist : </h6>
							<p>	3 feb 2020 </p>
							<i><p> &ldquo; Pokhara ticks all the right boxes, with spectacular scenery, adventure activities, and accommodation and food choices galore. &rdquo;</p></i>
							<hr>
								<form>
									<label>Rate out of 5 : </label>
									<input type="number" name="rate" min="1" max="5" ><br>
									<textarea class="placereviews" name="placereviews">Enter your experience...</textarea><br>
									<input type="submit" class="btn btn-primary" name="submit" value="submit">
								</form>
							<hr>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-sm-6">
				<div class="card">
					<u><h4 class="ptitle text-center"> List Of Guides : </h4></u>
                    <hr>
                    @foreach ($topGuides as $guide)
                        <div class="row guide">
						<img class="rounded-circle col-md-3 col col-sm-6  card-img-top" src="{{$guide->image}}">
						<div class="card-body">
							<h4 class="card-title">{{$guide->name}}</h4>
							<div class="rating">
							<img src="{{URL::asset('frontend/img/full.png')}}">
							<img src="{{URL::asset('frontend/img/full.png')}}">
							<img src="{{URL::asset('frontend/img/full.png')}}">
							<img src="{{URL::asset('frontend/img/full.png')}}">
							<img src="{{URL::asset('frontend/img/full.png')}}">
							</div>
							<a href="{{URL::asset('/guide/'.$guide->id)}}" class="btn btn-outline-secondary">View Profile</a><a href="#" class="btn-hire btn btn-outline-primary">Hire guide</a>
						</div>
					</div>
					<hr>
                    @endforeach


			</div>
		</div>
	</div>
@endsection
