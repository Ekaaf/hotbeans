<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<!-- Mirrored from htmltemplate.akatheme.com/retation/style-v1/menu.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Oct 2022 07:11:10 GMT -->
<head>
	<?php 
		include('layout/head.php');
		include('php/connection.php');
	?>

</head>
<body class="page-menu">
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
					<img alt="" src="./images/menus/menus.jpg">
				</figure>
				<h1 class="title"><span class="line-title">Menu<i class="fa">&#xf111;</i></span></h1>
			</div>
			<div class="page-content">
				<div id="menus" class="menus">
					<div class="container">
						<div id="filter" class="filter">
							<?php 
								$sql = "SELECT * FROM categories order by id asc";
								$result = $conn->query($sql);
	                            if ($result->num_rows > 0) {
                              		while($row = $result->fetch_assoc()) {
							?>
							<button class="button" data-filter=".<?php echo $row['id'] ?>" style="margin-bottom:10px;"><?php echo $row['category'];?></button>
							<?php }}?>
						</div>
						<div class="menus-inner">
							
							<?php 
								$sql = "SELECT * FROM categories order by id asc";
								$result = $conn->query($sql);
								if($result->num_rows > 0) {
                              		while($row = $result->fetch_assoc()) {
                              			
							?>
							<section id="<?php echo $row['id'] ?>" class="section menu-item <?php echo $row['id'] ?>">
								<div class="row">
									<div class="col-sm-6">
										<h1 class="title"><?php echo $row['category'] ?></h1>
										<figure class="menu-thumbnail">
											<!-- <img alt="" src="./images/menus/menu-1.png"> -->
										</figure>
									</div>
									<div class="col-sm-6">
										<div class="menu-inner">
											<?php 
												$sql = "SELECT * FROM food_items where category_id=".$row['id'];
		                              			$data = $conn->query($sql);
													if($data->num_rows > 0) {
					                              		while($row = $data->fetch_assoc()) {
											?>
											<aside class="clearfix animated" data-animate="fadeInRight">
												<!-- <img class="menu-img" alt="" src="./images/menus/coffee-1.png"> -->
												<div class="menu-content">
													<h5 class="title menu-title"><span><?php echo $row['title']; ?></span><span class="menu-price"><i class="fa fa-usd"></i><?php echo $row['price']; ?></span></h5>
													<!-- <p>Our selection of coffee beans have been rigorously tested with every different type of coffee machine to make.</p> -->
												</div>
											</aside>
											<?php }}?>
											
										</div>
									</div>
								</div>
							</section>
							<?php }}?>
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
	<script src="./assets/js/vendor/isotope.pkgd.min.js"></script>
	<script src="./assets/js/vendor/jquery.waypoints.min.js"></script>
	<script src="./assets/js/vendor/sticky.min.js"></script>
	<script src="./assets/js/vendor/bootstrap.min.js"></script>
	<script src="./assets/js/vendor/jquery.nivo.slider.pack.js"></script>

	<script src="./assets/js/main.js"></script>

</body>

<!-- Mirrored from htmltemplate.akatheme.com/retation/style-v1/menu.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Oct 2022 07:11:20 GMT -->
</html>
