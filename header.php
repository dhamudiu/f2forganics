<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<title>Farm to family organic</title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/png" href="<?php echo esc_attr( F2FORGANICS_ASSETS ) . '/images/icons/favicon.png'; ?>">
	<link rel="stylesheet" type="text/css"
		href="<?php echo esc_attr( F2FORGANICS_ASSETS ) . '/vendor/bootstrap/css/bootstrap.min.css'; ?>">
	<link rel="stylesheet" type="text/css"
		href="<?php echo esc_attr( F2FORGANICS_ASSETS ) . '/fonts/font-awesome-4.7.0/css/font-awesome.min.css'; ?>">
	<link rel="stylesheet" type="text/css"
		href="<?php echo esc_attr( F2FORGANICS_ASSETS ) . '/fonts/linearicons-v1.0.0/icon-font.min.css'; ?>">
	<link rel="stylesheet" type="text/css"
		href="<?php echo esc_attr( F2FORGANICS_ASSETS ) . '/vendor/animate/animate.css'; ?>">
	<link rel="stylesheet" type="text/css"
		href="<?php echo esc_attr( F2FORGANICS_ASSETS ) . '/vendor/css-hamburgers/hamburgers.min.css'; ?>">
	<link rel="stylesheet" type="text/css"
		href="<?php echo esc_attr( F2FORGANICS_ASSETS ) . '/vendor/animsition/css/animsition.min.css'; ?>">
	<link rel="stylesheet" type="text/css"
		href="<?php echo esc_attr( F2FORGANICS_ASSETS ) . '/vendor/select2/select2.min.css'; ?>">
	<link rel="stylesheet" type="text/css"
		href="<?php echo esc_attr( F2FORGANICS_ASSETS ) . '/vendor/daterangepicker/daterangepicker.css'; ?>">
	<link rel="stylesheet" type="text/css"
		href="<?php echo esc_attr( F2FORGANICS_ASSETS ) . '/vendor/slick/slick.css'; ?>">
	<link rel="stylesheet" type="text/css"
		href="<?php echo esc_attr( F2FORGANICS_ASSETS ) . '/vendor/MagnificPopup/magnific-popup.css'; ?>">
	<link rel="stylesheet" type="text/css"
		href="<?php echo esc_attr( F2FORGANICS_ASSETS ) . '/vendor/lightbox2/css/lightbox.min.css'; ?>">
	<link rel="stylesheet" type="text/css"
		href="<?php echo esc_attr( F2FORGANICS_ASSETS ) . '/vendor/perfect-scrollbar/perfect-scrollbar.css'; ?>">
	<link rel="stylesheet" type="text/css"
		href="<?php echo esc_attr( F2FORGANICS_ASSETS ) . '/vendor/revolution/css/layers.css'; ?>">
	<link rel="stylesheet" type="text/css"
		href="<?php echo esc_attr( F2FORGANICS_ASSETS ) . '/vendor/revolution/css/navigation.css'; ?>">
	<link rel="stylesheet" type="text/css"
		href="<?php echo esc_attr( F2FORGANICS_ASSETS ) . '/vendor/revolution/css/settings.css'; ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo esc_attr( F2FORGANICS_ASSETS ) . '/css/util.css'; ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo esc_attr( F2FORGANICS_ASSETS ) . '/css/main.css'; ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header class="header-v1">
		<div class="container-menu-desktop fix-menu-desktop">
			<div class="wrap-menu-desktop" style="top: 0px;">
				<nav class="limiter-menu-desktop">
					<div class="left-header">
						<div class="menu-desktop">
							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'primary',
									'container'      => false,
									'menu_class'     => 'main-menu',
									'fallback_cb'    => false,
									'walker'         => new My_Custom_Walker_Nav_Menu(),
								)
							);
							?>
						</div>
					</div>

					<div class="center-header">
						<div class="logo">
							<a href="<?php echo esc_attr( get_home_url() ); ?>">
								<img src="<?php echo esc_attr( F2FORGANICS_ASSETS ) . '/images/icons/logo-01.png'; ?>"
									alt="IMG-LOGO">
							</a>
						</div>
					</div>

					<div class="right-header">
						<div class="wrap-icon-header flex-w flex-r-m h-full wrap-menu-click p-t-8">
							<ul class="main-menu">
								<li>
									<a href="<?php echo esc_attr( wc_get_cart_url() ); ?>">Cart</a>
								</li>
							</ul>

							<?php if ( is_user_logged_in() ) : ?>
								<?php
								// if logged in, show the account icon
								wp_nav_menu(
									array(
										'theme_location' => 'secondary',
										'container'      => false,
										'menu_class'     => 'main-menu',
										'fallback_cb'    => false,
										'walker'         => new My_Custom_Walker_Nav_Menu(),
									)
								);
								?>
							<?php else : ?>
								<ul class="main-menu">
									<li>
										<a href="<?php echo esc_attr( wc_get_page_permalink( 'myaccount' ) ); ?>">My Account</a>
									</li>
								</ul>
							<?php endif; ?>

							<div class="h-full flex-m">
								<div class="icon-header-item flex-c-m trans-04 js-show-modal-search">
									<img src="<?php echo esc_attr( F2FORGANICS_ASSETS ) . '/images/icons/icon-search.png'; ?>"
										alt="SEARCH">
								</div>
							</div>
						</div>
					</div>
				</nav>
			</div>
		</div>

		<div class="wrap-header-mobile">
			<div class="logo-mobile">
				<a href="<?php echo esc_attr( get_home_url() ); ?>"><img
						src="<?php echo esc_attr( F2FORGANICS_ASSETS ) . '/images/icons/logo-01.png'; ?>" alt="IMG-LOGO"></a>
			</div>

			<div class="wrap-icon-header flex-w flex-r-m h-full wrap-menu-click m-r-15">
				<div class="h-full flex-m">
					<div class="icon-header-item flex-c-m trans-04 js-show-modal-search">
						<img src="<?php echo esc_attr( F2FORGANICS_ASSETS ) . '/images/icons/icon-search.png'; ?>"
							alt="SEARCH">
					</div>
				</div>
			</div>

			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box"><span class="hamburger-inner"></span></span>
			</div>
		</div>

		<div class="menu-mobile">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'container'      => false,
					'menu_class'     => 'main-menu-m pb-0',
					'fallback_cb'    => false,
					'walker'         => new My_Custom_Walker_Nav_Menu2(),
				)
			);
			?>

			<ul class="main-menu-m p-0">
				<li>
					<a href="<?php echo esc_attr( wc_get_cart_url() ); ?>">Cart</a>
				</li>
			</ul>

			<?php if ( is_user_logged_in() ) : ?>
				<?php
				// if logged in, show the account icon
				wp_nav_menu(
					array(
						'theme_location' => 'secondary',
						'container'      => false,
						'menu_class'     => 'main-menu-m pt-0',
						'fallback_cb'    => false,
						'walker'         => new My_Custom_Walker_Nav_Menu2(),
					)
				);
				?>
			<?php else : ?>
				<ul class="main-menu-m pt-0">
					<li>
						<a href="<?php echo esc_attr( wc_get_page_permalink( 'myaccount' ) ); ?>">My Account</a>
					</li>
				</ul>
			<?php endif; ?>
		</div>

		<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
			<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
				<span class="lnr lnr-cross"></span>
			</button>

			<div class="container-search-header">
				<form class="wrap-search-header flex-w">
					<button class="flex-c-m trans-04"><span class="lnr lnr-magnifier"></span></button>
					<input class="plh1" type="text" name="search" placeholder="Search...">
				</form>
			</div>
		</div>
	</header>