<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<!-- Mirrored from htmltemplate.akatheme.com/retation/style-v1/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Oct 2022 07:11:27 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>The Retation HTML</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link type="text/css" rel="stylesheet"
	href="http://fonts.googleapis.com/css?family=Playfair+Display:400,700">
<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700'
	rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="./assets/css/animate.css">
<link rel="stylesheet" href="./assets/css/hover.css">
<link rel="stylesheet" href="./assets/css/bootstrap.min.css">
<link rel="stylesheet" href="./assets/css/font-awesome.min.css">
<link rel="stylesheet" href="./assets/css/main.css">
<link rel="stylesheet" href="./assets/css/responsive.css">
<link rel="stylesheet" href="./assets/css/color/default.css">

<script src="./assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

</head>
<body class="page-contact">
	<!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

	<div id="wrap">

		<!-- Header -->
		<header class="header">
			<div class="header-inner">
				
				<!-- Main Menu -->
					<?php 
						include('layout/header.php');
					?>
					
			</div>

		</header>


		<div id="main-content" class="main-content">
			<div class="page-header">
				<figure class="post-thumbnail">
					<img alt="" src="./images/contact/contact.jpg">
				</figure>
				<h1 class="title">
					<span class="line-title">Contacts<i class="fa">&#xf111;</i></span>
				</h1>
			</div>
			<div class="page-content">
				<div class="container">

					<div class="row">
					
						<div class="col-md-3 col-md-push-9">
							<div class="sidebar">
								<div class="widget">
									<div class="widget-inner">
										<h3 class="title">Contacts Info</h3>
										<div class="widget-text">
											<p>Cleatskins are revolutionary footwear accessory designed to allow athletes to move swiftly.</p>
											<p>
											Email: <a href="mailto:noreply@gmail.com">noreply@gmail.com</a><br>
											Phone: +800 - 568 - 8989	
											</p>
											<p>96 Isabella ST, London, SE 1 8DD</p>
										</div>
									</div>
								</div>
								
								<div class="widget">
									<div class="widget-inner">
										<h3 class="title">Store Hours</h3>
										<div class="widget-text">
											<div class="row">
												<div class="col-xs-8 col-sm-7">Monday - Thursday</div>
												<div class="col-xs-4 col-sm-5">8 am - 5 pm</div>
												
												<div class="col-xs-8 col-sm-7">Friday</div>
												<div class="col-xs-4 col-sm-5">8 am - 6 pm</div>
												
												<div class="col-xs-8 col-sm-7">Saturday</div>
												<div class="col-xs-4 col-sm-5">9 am - 5 pm</div>
												
												<div class="col-xs-8 col-sm-7">Sunday &amp; Holidays</div>
												<div class="col-xs-4 col-sm-5">Closed</div>
											</div>                 
                                                                       
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-md-9  col-md-pull-3">
							<div class="contact-content">
								<h3 class="title contact-title">Contacts Form</h3>
								<p class="contact-desc">The film is an initiative taken on
									by professional snowboarder Marie-France Roy and directed by
									Filmmaker Darcy Turenne in which all the riders are bringing to
									life the importance of protecting and living in balance with
									our environment.</p>
								<form action="https://htmltemplate.akatheme.com/retation/php/contact.php" method="post" id="contactform"
									class="contact-form">
									<div class="row">
										<div class="col-sm-4">
											<p class="contact-form-author">
												<input type="text" required="required" size="30" value=""
													name="author" id="author" placeholder="Name">
											</p>
										</div>
										<div class="col-sm-4">
											<p class="contact-form-email">
												<input type="email" required="required" size="30" value=""
													name="email" id="email" placeholder="Email">
											</p>
										</div>
										<div class="col-sm-4">
											<p class="contact-form-subject">
												<input type="text" required="required" size="30" value=""
													name="subject" id="subject" placeholder="Subject">
											</p>
										</div>
									</div>

									<p class="contact-form-message">
										<textarea required="required" rows="3" cols="45"
											name="message" id="message" placeholder="Your message"></textarea>
									</p>
									<p class="form-submit button">
										<button class="hvr-rectangle-out" type="submit" id="submit"
											name="submit">Send Message</button>
									</p>
								</form>
							</div>
						</div>

					</div>
				</div>
				
				<div class="maps">
					<div id="map-canvas"></div>
				</div>
				
			</div>

		</div>

		<?php 
			include('layout/footer.php')
		?>

	</div>

	<script src="./assets/js/vendor/jquery-1.11.2.min.js"></script>
	<script src="./assets/js/vendor/flickity.pkgd.min.js"></script>
	<script src="./assets/js/vendor/imagesloaded.pkgd.min.js"></script>
	<script src="./assets/js/vendor/jquery.waypoints.min.js"></script>
	<script src="./assets/js/vendor/bootstrap.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js"></script>
	
	<script src="./assets/js/main.js"></script>

</body>

<!-- Mirrored from htmltemplate.akatheme.com/retation/style-v1/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Oct 2022 07:11:28 GMT -->
</html>
