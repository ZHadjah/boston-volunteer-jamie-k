@extends('_layouts.main')

@section('title', 'Get Involved')

@section('hero-media')
		<video autoplay loop muted playsinline>
			<source src="/assets/video/pexels-julia-m-cameron-6893742.mp4"
			type="video/mp4">
			<!-- TODO: a still image here as a fallback -->
			Sorry, your browser doesn't support embedded videos.
		</video>
@endsection

@section('hero-content')
	<h1>Get Involved</h1>
	<p>Let us help you grow while growing your community.</p>
@endsection

@section('content')
<section class="bv-get-involved">
	<h2 class="bv-center">We make it easy to help, no matter what your schedule is.</h2>
	<p>You choose which events you want to go to. Some people come to almost all Boston Volunteer events. Others might only come to one a year. You decide.</p>
	<div class="bv-impact">
		<aside class="bv-commit">
			<h3>Volunteer</h3>
			<p>Get involved with your community without significant hassle or time commitments, or test the waters to see what volunteering is like. Pick any opportunity you're interested in that's convenient for you, and we'll handle the rest.</p>
			<a href="https://www.meetup.com/BostonVolunteer/events/" class="bv-button">Find an event</a>
		</aside>
		<aside class="bv-commit">
			<h3>Organize an Event</h3>
			<p>Connect with the forces of Boston Volunteer by organizing your own volunteer event. Direct our community to the areas of greatest need and multiply your impact on your schedule. Just let us know how we can help.</p>
			<a href="/events" class="bv-button">Organize an event</a>
		</aside>
		<aside class="bv-commit">
			<h3>Join the Leadership Team</h3>
			<p>Everyone has a superpower. What's yours? We need support of all sorts at the organizational level. Tell us how you think your skillset could help Boston Volunteer grow, and we'll help you grow your career in the process.</p>
			<a href="mailto:josh@bostonvolunteer.org" class="bv-button">Contact Team Lead</a>
		</aside>
		<aside class="bv-commit">
			<h3>Become an Organizer</h3>
			<p>If you are looking to grow in your leadership skills, or give back at the leadership level, we need people who can help grow, shape, and direct Boston Volunteer. We need voices of all levels of experience and backgrounds.</p>
			<a href="mailto:josh@bostonvolunteer.org" class="bv-button">Contact Team Lead</a>
		</aside>
		<aside class="bv-commit">
			<h3>Become a Sponsor</h3>
			<p>Are you looking to make an meaningful, measurable local impact? Help us build a better Boston.</p>
			<a href="/our-sponsors" class="bv-button">Learn How</a>
		</aside>
	</div>
</section>

<section class="bv-center">
	<!-- Begin Mailchimp Signup Form -->
	<style type="text/css">
		#sign-up {
			max-width: 700px;
    		margin: auto;
		}
		#sign-up #mc_embed_signup .indicates-required {
			display: block;
		}
		#sign-up #mc_embed_signup .mc-field-group label,
		#sign-up #mc_embed_signup p {
			font-family: Domine,serif;
			font-size: 18px;
			line-height: 1.5;
		}
		#sign-up #mc_embed_signup .foot {
			text-align: center;
		}
		#sign-up #mc_embed_signup .button {
			width: 50%;
			height: auto;
			margin: auto;
			border-radius: 20px;
			color: #fff;
			padding: .5em 1em;
			font-size: 18px;
			font-family: Domine,serif;
		}

	</style>
	<div id="sign-up">
		<h3>Building a Better Massachusetts</h3>
		<h2 style="text-style:italic">The Local</h2>
 

		<p>Subscribing and completing your profile is the best way to stay up to date with <em>Boston Volunteer</em>, our partners, events, and other ways to stay connected.</p>
		<div id="mc_embed_signup">
			<form action="https://bostonvolunteer.us9.list-manage.com/subscribe/post?u=5df86fdbb84bf65c1e446cc52&amp;id=b5cc9ded8e&amp;f_id=00480de1f0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
				<div id="mc_embed_signup_scroll">
				<div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
		<div class="mc-field-group">
			<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
		</label>
			<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" required>
			<span id="mce-EMAIL-HELPERTEXT" class="helper_text"></span>
		</div>
		<div class="mc-field-group">
			<label for="mce-FNAME">First Name  <span class="asterisk">*</span>
		</label>
			<input type="text" value="" name="FNAME" class="required" id="mce-FNAME" required>
			<span id="mce-FNAME-HELPERTEXT" class="helper_text"></span>
		</div>
		<div class="mc-field-group">
			<label for="mce-LNAME">Last Name  <span class="asterisk">*</span>
		</label>
			<input type="text" value="" name="LNAME" class="required" id="mce-LNAME" required>
			<span id="mce-LNAME-HELPERTEXT" class="helper_text"></span>
		</div>
			<div id="mce-responses" class="clear foot">
				<div class="response" id="mce-error-response" style="display:none"></div>
				<div class="response" id="mce-success-response" style="display:none"></div>
			</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
			<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_5df86fdbb84bf65c1e446cc52_b5cc9ded8e" tabindex="-1" value=""></div>
				<div class="optionalParent">
					<div class="clear foot">
						<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
						<p class="brandingLogo"><a href="http://eepurl.com/ibw145" title="Mailchimp - email marketing made easy and fun"><img src="https://eep.io/mc-cdn-images/template_images/branding_logo_text_dark_dtp.svg"></a></p>
					</div>
				</div>
			</div>
		</form>
		</div>
		<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='BIRTHDAY';ftypes[5]='birthday';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
		<!--End mc_embed_signup-->
	</div>
</section>
<section class="bv-center">
	<h2 class="bv-center">Still not sure about joining us?</h2>
	<p>Read our story. We think you'll be impressed&mdash;and hopefully, inspired to take action.</p>
	<a href="/our-story" class="bv-button">Read our story</a>
</section>
@endsection
