<!DOCTYPE html>
<html lang="en" dir="ltr">

	<!-- START head -->
	<head>
		<!-- Site meta charset -->
		<meta charset="UTF-8">

		<!-- title -->
		<title>ACTPANION | @yield('title') </title>

		<!-- meta description -->
		<meta name="description" content="@yield('description')" />

		<!-- meta keywords -->
		<meta name="keywords" content="@yield('keywords')" />

		<!-- meta viewport -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

		<!-- favicon -->
		<link rel="icon" href="favicon.ico" type="image/x-icon" />
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

		<!-- bootstrap 3 stylesheets -->
		<link rel="stylesheet" type="text/css" href="{{ url('assets/bs3/css/bootstrap.css') }}" media="all" />
		<!-- template stylesheet -->
		<link rel="stylesheet" type="text/css" href="{{ url('assets/css/styles.css') }} " media="all" />

		<!-- responsive stylesheet -->
		<link rel="stylesheet" type="text/css" href="{{ url('assets/css/responsive.css') }}" media="all" />
		<!-- Load Fonts via Google Fonts API -->
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Karla:400,700,400italic,700italic" />
		<!-- color scheme -->
		<link rel="stylesheet" type="text/css" href="{{ url('assets/css/colors/color4.css') }} " title="color4" />

		<link rel="stylesheet" type="text/css" href="{{ url('assets/extent/animate.css') }} " title="" />


		@yield('customcss')

	</head>
	<!-- END head -->

	<!-- START body -->
	<body>
		<!-- START #wrapper -->
		<div id="wrapper">
			<!-- START header -->
			@include('fronttemplate.topmenu')
			<!-- END header -->

			@yield('slider')


		</div>


			<!-- END #main-slider -->


			<!-- START .main-contents -->
			<div class="main-contents">
				@yield('maincontent')
			</div>
			<!-- END .main-contents -->

			<footer>
				<!-- START #ft-footer -->
				<div id="ft-footer">
					<div class="footer-overlay">
						<div class="container">
							<div class="row">
								<!-- testimonials -->
								<section class="col-md-6">
									<h3><span style="color: #59aeff;">ACT</span>PANION TEAM</h3>
									<p>Tortor turpis. Proin. Dolor. Auctor arcu, habitasse mid placerat magna? Dis ac, adipiscing? Cras mus dolor sit a? Platea eros dictumst ridiculus sed phasellus, rhoncus magnis a pellentesque pulvinar duis purus risus tristique ultricies natoque, nec! Natoque natoque cum? Nec, placerat sociis! Sit ut, scelerisque? placerat sociis! Sit ut, scelerisque? Urna ut aliquam duis et scelerisque,</p>
									
								</section>

								<!-- twitter -->
								<section class="col-md-6">
									<h3 class="tw-feeds">Twitter Feeds</h3>
									<p>The only netball team that takes a team photo after every game #envato <a href="#">http://instagram.com/p/gXSJNTwBJe/</a></p>
									<p>Very excited that Envato is joining the big-ticket Macaw backers list - <a href="#">http://macaw.co</a>  - very intuitive looking new web design app!</p>
									<p>Remember, you really are your own boss. Sink or swim, but do it like a boss. (10/10) <a href="#">#10BootstrappingTips</a></p>
								</section>
							</div>
						</div>
					</div>
				</div>
				<!-- END #ft-footer -->

				<!-- START #ex-footer -->
				<div id="#ex-footer">
					<div class="container">
						<div class="row">
							<nav class="col-md-12">
								<ul class="footer-menu">
									<li><a href="#">Best Rate Guarntee</a></li>
									<li><a href="#">Careers</a></li>
									<li><a href="#">Hotel Directory</a></li>
									<li><a href="#">Website Terms of Use</a></li>
									<li><a href="#">Privacy Statement</a></li>
									<li><a href="#">Affiliates</a></li>
									<li class="last-item"><a href="#">Top Destinations</a></li>
								</ul>
							</nav>

							<div class="foot-boxs">
								<div class="foot-box col-md-4 text-right">
									<span>Stay Connected</span>
									<ul class="social-media footer-social">
										<li><a class="sm-yahoo" href="#"><span>Yahoo</span></a></li>
										<li><a class="sm-facebook" href="#"><span>Facebook</span></a></li>
										<li><a class="sm-rss" href="#"><span>RSS</span></a></li>
										<li><a class="sm-flickr" href="#"><span>Flicker</span></a></li>
										<li><a class="sm-windows" href="#"><span>Windows</span></a></li>
										<li><a class="sm-stumble" href="#"><span>Stumbleupon</span></a></li>
									</ul>
								</div>
								<div class="foot-box foot-box-md col-md-4">
									<span class="contact-email"> touchus@travelhub.com</span>
									<span class="contact-phone"> +1 125 496 0999</span>
								</div>
								<div class="foot-box col-md-4">
									<span class="">&copy; 2013 travelhub. All Rights Reserved.</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- END #ex-footer -->
			</footer>
		</div>
		<!-- END #wrapper -->




		<!-- javascripts -->
		<script type="text/javascript" src="{{ url('assets/js/modernizr.custom.17475.js') }} "></script>

		<script type="text/javascript" src="{{ url('assets/js/jquery.min.js') }} "></script>
		<script type="text/javascript" src="{{ url('assets/bs3/js/bootstrap.min.js') }} "></script>
		<script type="text/javascript" src="{{ url('assets/js/bootstrap-datepicker.js') }} "></script>
		<script src="{{ url('assets/js/jquery.flexslider-min.js') }} "></script>
		<script src="{{ url('assets/js/script.js') }} "></script>
		<script src="{{ url('assets/js/jquery.minimalect.min.js') }} " type="text/javascript"></script>

		<script src="{{ url('assets/js/styleswitcher.js') }} "></script>


		<!--[if lt IE 9]>
			<script type="text/javascript" src="js/html5shiv.js"></script>
		<![endif]-->

		@yield('customjs')



	</body>
</html>
