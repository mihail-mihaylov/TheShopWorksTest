@extends('master')

@section('wrapper')

	<!-- Navigation -->    
	@include('backend.partials.navigation')

	<!-- Main Page -->
	<div id="page-wrapper">
		<div class="container-fluid">
		
			<!-- Page Heading -->
			@yield('heading')
			
			<!-- Page Content -->
			@yield('content')
		</div>
		
	</div>

@endsection