@extends('layouts.front')

@section('content')

	<!-- START OF BLADE COMPONENTS -->

	@include('home.welcome')

	@include('home.research')

	@include('home.donate')

	@include('home.roadmap')

	@include('home.apps')

	@include('home.footer')

	<!-- ^ END OF BLADE COMPONENTS -->

	<!-- JS -->

	@include('partials.front.javascript')

@endsection