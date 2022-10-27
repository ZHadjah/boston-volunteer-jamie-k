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
	<p>We recently partnered with Amazon to stuff and deliver 1,183 backpacks with school supplies for local school kids.</p>
	<p>We've also partnered with dozens of local companies and nonprofits.</p>
	<p>Want to learn how you can make a local impact too? Become a sponsor and help us build a better Boston.</p>
	<a href="mailto:josh@bostonvolunteer.org" class="bv-button">Learn more</a>
</div>
@endsection