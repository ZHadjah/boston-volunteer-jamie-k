<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="canonical" href="{{ $page->getUrl() }}">
		<meta name="description" content="{{ $page->description }}">
		<title>{{ $page->title }}</title>
		<link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Domine&family=Fraunces&family=Newsreader&family=Petrona&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>

		<script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/5df86fdbb84bf65c1e446cc52/2c2a3942ba261a05b465fe036.js");</script>

		<link href="//cdn-images.mailchimp.com/embedcode/classic-071822.css" rel="stylesheet" type="text/css">
		<style type="text/css">
			html {
				min-width: 475px;
			}
			footer {
				align-items: flex-start;
			}
			#mc_embed_signup form {
				margin: 0;
				margin-bottom: 20px;
			}
			#mc_embed_signup{background:transparent; clear:left; font:14px Helvetica,Arial,sans-serif; }
			#mc_embed_signup .foot {
				display: block;
				width: 100%;
			}
			#mc_embed_signup .button {
				width: 100%;
    			background-color: #e14627;
			}
			#mc_embed_signup .brandingLogo,
			#mc_embed_signup .indicates-required {
				display: none;
			}
			#mc_embed_signup .helper_text {
				background-color: transparent;
			}
			#mc_embed_signup .mc-field-group {
				width: 100%;
			}
			#mc_embed_signup #mc-embedded-subscribe-form div.mce_inline_error {
				background-color: transparent;
			}
			#mc_embed_signup #mce-success-response {
				color: #2b3990;
				margin: 0;
				width: 100%;
				text-align: center;
				padding: 0;
				padding-bottom: 1.5em;
			}

			/* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
			We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
		</style>

		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-PN8L2R3');</script>
		<!-- End Google Tag Manager -->


	</head>
	<body>
		<header>
			<nav class="bv-nav" role="navigation">
				<a href="/" id="bv-logo">
					<img src="/assets/images/BV-new-01.svg" alt="Boston Volunteer">
				</a>
				<ul id="js-bv-nav" class="bv-nav-list">
					<li class="bv-nav-item"><a class="bv-nav-link" href="/about">About Us</a></li>
					<li class="bv-nav-item"><a class="bv-nav-link" href="/our-story">Our Story</a></li>
					<li class="bv-nav-item"><a class="bv-nav-link" href="/our-mission">Our Mission</a></li>
					<li class="bv-nav-item"><a class="bv-nav-link" href="/our-sponsors">Our Sponsors</a></li>
					<li class="bv-nav-item"><a class="bv-nav-link" href="/events">Events</a></li>
					<li class="bv-nav-break"></li>
					<li class="bv-nav-item bv-nav-callout"><a class="bv-nav-link bv-button bv-nav-button" href="/get-involved">Get Involved</a></li>
					<li class="bv-nav-item bv-nav-callout"><a class="bv-nav-link bv-button bv-nav-button" href="/get-involved/#sign-up">Sign Up for <em>The Local</em></a></li>
					<li class="bv-nav-item bv-nav-callout"><a class="bv-nav-link bv-button bv-nav-button" href="https://www.paypal.com/donate/?hosted_button_id=SDBG7NMRENJ7U" target="_blank">Donate</a></li>
				</ul>
			</nav>
		</header>
		<main>
			<section class="bv-hero">
				<div class="bv-hero-video">
					@yield('hero-media')
				</div>
				<section class="bv-hero-content">
					@yield('hero-content')
				</section>
			</section>
			<!--section class="bv-content"-->
				@yield('content')
			<!--/section-->
		</main>
		<footer>
			<address class="footer-logo">
				<img src="/assets/images/BV-new-01.svg" alt="Boston Volunteer">
				<div class="footer-tagline">
					<p><em>Big enough to deliver, small enough to care.</em></p>
					<p><a href="mailto:josh@bostonvolunteer.org">Contact Us</a></p>
				</div>
				<div class="footer-social">
				<a href="https://www.facebook.com/BostonVolunteers" target="_blank" class="fa fa-facebook"></a>
				<a href="https://instagram.com/bostonvolunteers/" target="_blank" class="fa fa-instagram"></a>
			</address>
			<address class="footer-credit">
				<div id="MailChimpSignUp">
					<!-- Begin Mailchimp Signup Form -->
					
					<div id="mc_embed_signup">
						<form action="https://bostonvolunteer.us9.list-manage.com/subscribe/post?u=5df86fdbb84bf65c1e446cc52&amp;id=b5cc9ded8e&amp;f_id=00480de1f0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
							<div id="mc_embed_signup_scroll">
							<h2>Upcoming Volunteer Opportunities Newsletter</h2>
							<div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
					<div class="mc-field-group">
						<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
					</label>
						<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" required>
						<span id="mce-EMAIL-HELPERTEXT" class="helper_text"></span>
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
			
				<p>
					Made with
					<svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" aria-labelledby="heart-icon" role="img">
						<title id="heart-icon">love</title>
						<path d="M 10,30
							A 20,20 0,0,1 50,30
							A 20,20 0,0,1 90,30
							Q 90,60 50,80
							Q 10,60 10,30 z"/>
					</svg>
					in Boston by <a href="https://ashleykolodziej.com/">Ashley Kolodziej</a> &amp; <a href="https://jimreevior.com/">Jim Reevior</a> for <a href="https://newenglandgivecamp.org/">New England GiveCamp</a>
				</p>
			</address>
		</footer>
		<section class="footer-tax-details">
			<p>Boston Volunteers Solutions Inc. is a nonprofit, tax-exempt charitable organization (tax ID number 88-3391995) under Section 501(c)(3) of the Internal Revenue Code. Donations are tax-deductible as allowed by law.</p>
		</section>
		
		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PN8L2R3"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript)-->

	</body>
</html>
