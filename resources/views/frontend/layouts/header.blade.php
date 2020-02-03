
<!-- Navigation bar -->
	<nav class="navbar navbar-expand-md navbar-light bg-light stricky-top">
		<div class="container-fluid">
			<div class="row"><a class="navbar-brand" href="{{route('home')}}"><img src="{{URL::asset('frontend/img/logo.png')}}"></a>
				<div class="brand-title">
					<span class="ftitle">Guides</span><span class="ltitle">Nepal</span>
					<p class="brand-tagline">&ldquo; Promoting tourism in Nepal &rdquo;</p>
				</div>
			</div>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a class="nav-link" href="#topP">Top Places</a></li>
					<li class="nav-item"><a class="nav-link" href="#topG">Top Guides</a></li>
					<form class="form-inline my-2 my-lg-0">
				      <input class="form-control mr-sm-2" type="search" placeholder="Search . . ." aria-label="Search">
				      <button class="btn btn-outline-danger my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
				    </form>
					<li class="nav-item log"><a class="nav-link" href="{{route('signin')}}">Login</a></li>
					<li class="nav-item"><a class="nav-link" href="{{route('signup')}}">Sign Up</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- /Navigation bar -->
