<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>{!! env('APP_NAME','Laravel') !!} | @yield('title')</title>

	<!-- Site favicon -->
	<!-- <link rel="shortcut icon" href="images/favicon.ico"> -->

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

	<!-- CSS -->
	<link rel="stylesheet" href="{!! asset('css/admin.css') !!}">
	@yield('styles')

</head>
<body>
	
	<!-- Include Header Section -->
	@include('admin.shared.header')

	<!-- Include Sidebar Section -->
	@include('admin.shared.sidebar')

	<!-- Fetch Content -->
	@yield('content')

	<!-- Include Footer Section  -->
	@include('admin.shared.footer')

	<!-- js -->
	<script src="{!! asset('js/admin.js') !!}"></script>
	@yield('scripts')
</body>
</html>