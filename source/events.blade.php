@extends('_layouts.main')

@section('title', 'Events')

@section('hero-media')
	<video autoplay loop muted playsinline>
		<source src="/assets/video/pexels-julia-m-cameron-6894045.mp4"
		type="video/mp4">
		<!-- TODO: a still image here as a fallback -->
		Sorry, your browser doesn't support embedded videos.
	</video>
@endsection

@section('hero-content')
	<h1>Events</h1>
	<p>Passionate about a cause, but need help? We can connect you with a workforce.</p>
@endsection

@section('content')
<div class="bv-content-container">
	<h2>The Big School Supplies for School Kids Event (with Amazon)</h2>
	<p>Recently we partners with 5 local schools and Amazon. Soon we will be delivered 1,183 school supply stuffed back packs, to local kids.</p>
	<a href="/get-involved" class="bv-button">Now it's your turn!</a>
</div>
<div class="bv-content-container">
	<p>If you’re like to organize a similar event, and make a meaningful, measurable impact in your community, then email Josh now.</p>
	<a href="mailto:josh@bostonvolunteer.org" class="bv-button">Email Josh now</a>
</div>
@endsection
