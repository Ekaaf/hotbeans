<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<!-- Mirrored from htmltemplate.akatheme.com/retation/style-v1/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Oct 2022 07:11:27 GMT -->
<head>
	<?php 
		include('layout/head.php');
	?>

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
											<p>Anabil Tower, Plot # 3 , Block -NW(J Gulshan North Avenue,<br>Kemal Ataturk Ave, 1212,<br> Dhaka, Dhaka Division, Bangladesh</p>
											<p>
											Email: <a href="mailto:noreply@gmail.com">info@hotbeansbd.com</a><br>
											Phone: 01744-137534
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						


						<div class="col-md-9  col-md-pull-3">
							<div class="contact-content">
								<div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=anabil%20tower%20gulshan&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div></div>
							</div>
						</div>

						<div class="col-md-9  col-md-pull-3" style="display: none;">
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
