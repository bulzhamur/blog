<!DOCTYPE html>
<html lang="en">

<head>
	<title>{{ $title }}</title>
	<meta name="description" content="{{ $description }}" />

@include('layouts/styles')

</head>

<body>
	<div id="wrapper">
		<!-- start header -->
		@include('layouts/header')
		<!-- end header -->
		@if(Request::path() != '/')
			@include('layouts/breadcrumbs')
		@endif
		@yield('content')
		@include('layouts/footer')
	</div>
	<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
	<!-- javascript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	
@include('layouts/scripts')	

</body>

</html>
