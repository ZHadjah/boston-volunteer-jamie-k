@extends('_layouts.main')

@section('title', 'Our Sponsors')

@section('hero-media')
	<video autoplay loop muted playsinline>
		<source src="/assets/video/pexels-julia-m-cameron-6894187.mp4"
		type="video/mp4">
		<!-- TODO: a still image here as a fallback -->
		Sorry, your browser doesn't support embedded videos.
	</video>
@endsection

@section('hero-content')
	<h1>Our Sponsors</h1>
	<p>Proud to work with great organizations. We couldn't do it without you!</p>
@endsection

@section('content')
<div class="bv-content-container">
	<p>Please see a list of sponsors below:</p>
	<a href="/get-involved" class="bv-button">Sponsor an event</a>
</div>
@endsection