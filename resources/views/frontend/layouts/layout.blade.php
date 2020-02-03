<!DOCTYPE html>
<html lang="en ">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GuidesNepal | promotingTourism</title>
    @yield('styles')
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/js/all.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('frontend/css/style.css')}}">
    {{-- <link rel="stylesheet" type="text/css" href="{{URL::asset('frontend/css/style-sign-up.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('frontend/css/style-sign-in.css')}}"> --}}
</head>
<body>
    <!-- Navigation bar -->
    @include('frontend.layouts.header')
	<!-- /Navigation bar -->

    @yield('pagecontent')
    <!-- Footer -->
	@include('frontend.layouts.footer')
	<!-- /Footer -->
    <script>
    function search_place(){
        var data = document.getElementById('search_data').value;
        if((data.toLowerCase()) == "pokhara"){
            window.location = 'http://127.0.0.1:8000/place/7';
        }
        else if((data.toLowerCase()) == "chitwan"){
            window.location = 'http://127.0.0.1:8000/place/8';
        }
        else if((data.toLowerCase()) == "manang"){
            window.location = 'http://127.0.0.1:8000/place/9';
        } else {
            alert("No result found!!");
        }

    }
    </script>
    @yield('scripts')

</body>
</html>
