<!DOCTYPE html>
<html lang="en">

<head>
	<title>Farm to family organic</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/png" href="images/icons/favicon.png" />
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="vendor/MagnificPopup/magnific-popup.css">
	<link rel="stylesheet" type="text/css" href="vendor/lightbox2/css/lightbox.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
	<link rel="stylesheet" type="text/css" href="vendor/revolution/css/layers.css">
	<link rel="stylesheet" type="text/css" href="vendor/revolution/css/navigation.css">
	<link rel="stylesheet" type="text/css" href="vendor/revolution/css/settings.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body class="animsition <?php if ( isset( $ishome ) && $ishome == true ) {
	echo 'home-page';
} ?>">
	<header class="header-v1">
		<div class="container-menu-desktop">
			<div class="wrap-menu-desktop">
				<nav class="limiter-menu-desktop">
					<div class="left-header">

						<div class="menu-desktop">
							<ul class="main-menu">
								<li class="active-menu">
									<a href="index.php">Home</a>
								</li>
								<li>
									<a href="about-us.php">About Us</a>
									<ul class="sub-menu">
										<li><a href="why-choose-us.php">Why Choose Us?</a></li>
										<li><a href="sustainability-practices.php">Sustainability Practices</a></li>
										<li><a href="community-engagement.php">Community Engagement</a></li>
									</ul>
								</li>
								<li>
									<a href="product.php">Product</a>
								</li>
								<li>
									<a href="careers.php">Careers</a>
								</li>
								<li>
									<a href="contact.php">Contact</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="center-header">
						<div class="logo">
							<a href="index.php"><img src="images/icons/logo-01.png" alt="IMG-LOGO"></a>
						</div>
					</div>
					<div class="right-header">

						<div class="wrap-icon-header flex-w flex-r-m h-full wrap-menu-click p-t-8">
							<div class="h-full flex-m">
								<div class="icon-header-item flex-c-m trans-04 js-show-modal-search">
									<img src="images/icons/icon-search.png" alt="SEARCH">
								</div>
							</div>
						</div>
					</div>
				</nav>
			</div>
		</div>

		<div class="wrap-header-mobile">

			<div class="logo-mobile">
				<a href="index.php"><img src="images/icons/logo-01.png" alt="IMG-LOGO"></a>
			</div>

			<div class="wrap-icon-header flex-w flex-r-m h-full wrap-menu-click m-r-15">
				<div class="h-full flex-m">
					<div class="icon-header-item flex-c-m trans-04 js-show-modal-search">
						<img src="images/icons/icon-search.png" alt="SEARCH">
					</div>
				</div>
			</div>

			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>

		<div class="menu-mobile">
			<ul class="main-menu-m">
				<li>
					<a href="index.php">Home</a>
				</li>
				<li>
					<a href="about-us.php">About Us</a>
					<ul class="sub-menu">
						<li><a href="why-choose-us.php">Why Choose Us?</a></li>
						<li><a href="sustainability-practices.php">Sustainability Practices</a></li>
						<li><a href="community-engagement.php">Community Engagement</a></li>
					</ul>
					<span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
				</li>
				<li>
					<a href="product.php">Product</a>
				</li>
				<li>
					<a href="careers.php">Careers</a>
				</li>
				<li>
					<a href="contact.php">Contact</a>
				</li>
			</ul>
		</div>

		<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
			<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
				<span class="lnr lnr-cross"></span>
			</button>
			<div class="container-search-header">
				<form class="wrap-search-header flex-w">
					<button class="flex-c-m trans-04">
						<span class="lnr lnr-magnifier"></span>
					</button>
					<input class="plh1" type="text" name="search" placeholder="Search...">
				</form>
			</div>
		</div>
	</header>