<div class="container">
	<!-- Top Header -->
	<div class="header-top">

		<div class="row">
			<div class="col-sm-4 header-left col-xs-6">
				
			</div>
			<div class="col-sm-4 header-right col-sm-push-4  col-xs-6">
				
			</div>
			
			<!-- Logo -->
			<div id="logo" class="col-sm-4 logo col-sm-pull-4">
				<a href="index-2.html"><img alt="The Retation"
					src="./assets/imgs/logo2.jpg"></a>
			</div>
			
		</div>
	</div>

</div>
<nav id="primary-navigation" class="navbar" role="navigation">
	<div class="navbar-inner">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed"
				data-toggle="collapse" data-target="#navbar">
				<span class="sr-only">Toggle navigation</span> <span
					class="icon-bar"></span> <span class="icon-bar"></span> <span
					class="icon-bar"></span>
			</button>
			<h3 class="navbar-brand">Menu</h3>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li class="<?php if(strpos($_SERVER['REQUEST_URI'], 'index.php')) echo 'active'; ?>"><a href="index.php">Home</a></li>
				<li class="<?php if(strpos($_SERVER['REQUEST_URI'], 'about.php')) echo 'active'; ?>"><a href="about.php">About</a></li>
				<li class="<?php if(strpos($_SERVER['REQUEST_URI'], 'menu.php')) echo 'active'; ?>"><a href="menu.php">Menu</a></li>
				<li class="<?php if(strpos($_SERVER['REQUEST_URI'], 'galleries.php')) echo 'active'; ?>"><a href="galleries.php">Galleries</a>
				</li>
				<li class="<?php if(strpos($_SERVER['REQUEST_URI'], 'contact.php')) echo 'active'; ?>"><a href="contact.php">Contacts</a></li>
			</ul>
		</div>
		<!--/.navbar-collapse -->
	</div>
</nav>