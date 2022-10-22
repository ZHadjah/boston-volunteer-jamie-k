@extends('_layouts.main')

@section('title', 'Thank You')

@section('hero-media')
	<video autoplay loop muted playsinline>
		<source src="/assets/video/pexels-julia-m-cameron-6894187.mp4"
		type="video/mp4">
		<!-- TODO: a still image here as a fallback -->
		Sorry, your browser doesn't support embedded videos.
	</video>
@endsection

@section('hero-content')
	<h1>Thank You</h1>
	<p>Your donation will make a difference in our city.</p>
@endsection

@section('content')
<div class="bv-content-container">
	<p>Boston Volunteers Solutions Inc. is a nonprofit, tax-exempt charitable organization (tax ID number 88-3391995) under Section 501(c)(3) of the Internal Revenue Code. Donations are tax-deductible as allowed by law.</p>
	<a href="/get-involved" class="bv-button">Find more ways to help</a>
</div>
@endsection
