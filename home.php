<?php
/*
Template Name: Home Page
*/
global $ishome;
$ishome = true;

get_header();
?>

<section class="sec-slider">
	<div class="rev_slider_wrapper fullwidthbanner-container">
		<div id="rev_slider_1" class="rev_slide fullwidthabanner" data-version="5.4.5" style="display:none">
			<ul>
				<li data-transition="fade">
					<img src="<?php echo esc_attr( F2FORGANICS_ASSETS ) . '/images/bg-slide-03.jpg'; ?>" alt="IMG-BG"
						class="rev-slidebg">

					<div class="tp-caption tp-resizeme layer1"
						data-frames="[{&quot;delay&quot;:1300,&quot;speed&quot;:1300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:-200px;skX:85px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
						data-visibility="['on', 'on', 'on', 'on']" data-fontsize="['35', '35', '35', '35']"
						data-lineheight="['42', '42', '42', '42']" data-color="['#333']"
						data-textAlign="['left', 'left', 'center', 'center']" data-x="['left']" data-y="['center']"
						data-hoffset="['310', '80', '0', '0']" data-voffset="['-78', '-78', '-78', '-150']"
						data-width="['650','650','768','576']" data-height="['auto']" data-whitespace="['normal']"
						data-paddingtop="[0, 0, 0, 0]" data-paddingright="[15, 15, 15, 15]" data-paddingbottom="[0, 0, 0, 0]"
						data-paddingleft="[15, 15, 15, 15]" data-basealign="slide" data-responsive_offset="on">
						<span class="child1">Organic</span> <span class="child2">products</span>
					</div>

					<h2 class="tp-caption tp-resizeme layer2"
						data-frames="[{&quot;delay&quot;:500,&quot;speed&quot;:1300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:200px;skX:-85px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
						data-visibility="['on', 'on', 'on', 'on']" data-fontsize="['75', '75', '75', '75']"
						data-lineheight="['82', '82', '82', '82']" data-color="['#333']"
						data-textAlign="['left', 'left', 'center', 'center']" data-x="['left']" data-y="['center']"
						data-hoffset="['310', '80', '0', '0']" data-voffset="['0', '0', '0', '-30']"
						data-width="['650','650','768','576']" data-height="['auto']" data-whitespace="['normal']"
						data-paddingtop="[0, 0, 0, 0]" data-paddingright="[15, 15, 15, 15]" data-paddingbottom="[0, 0, 0, 0]"
						data-paddingleft="[15, 15, 15, 15]" data-basealign="slide" data-responsive_offset="on">
						Fresh Grocery
					</h2>
				</li>
				<li data-transition="fade">

					<img src="<?php echo esc_attr( F2FORGANICS_ASSETS ) . '/images/bg-slide-01.jpg'; ?>" alt="IMG-BG"
						class="rev-slidebg">

					<div class="tp-caption tp-resizeme layer1"
						data-frames="[{&quot;delay&quot;:1300,&quot;speed&quot;:1300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
						data-visibility="['on', 'on', 'on', 'on']" data-fontsize="['35', '35', '35', '35']"
						data-lineheight="['42', '42', '42', '42']" data-color="['#333']"
						data-textAlign="['left', 'left', 'center', 'center']" data-x="['left']" data-y="['center']"
						data-hoffset="['310', '80', '0', '0']" data-voffset="['-78', '-78', '-78', '-150']"
						data-width="['650','650','768','576']" data-height="['auto']" data-whitespace="['normal']"
						data-paddingtop="[0, 0, 0, 0]" data-paddingright="[15, 15, 15, 15]" data-paddingbottom="[0, 0, 0, 0]"
						data-paddingleft="[15, 15, 15, 15]" data-basealign="slide" data-responsive_offset="on">
						<span class="child1">Organic</span> <span class="child2">products</span>
					</div>

					<h2 class="tp-caption tp-resizeme layer2"
						data-frames="[{&quot;delay&quot;:500,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;&quot;,&quot;mask&quot;:&quot;x:[-100%];y:0;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
						data-visibility="['on', 'on', 'on', 'on']" data-fontsize="['75', '75', '75', '75']"
						data-lineheight="['82', '82', '82', '82']" data-color="['#333']"
						data-textAlign="['left', 'left', 'center', 'center']" data-x="['left']" data-y="['center']"
						data-hoffset="['310', '80', '0', '0']" data-voffset="['0', '0', '0', '-30']"
						data-width="['650','650','768','576']" data-height="['auto']" data-whitespace="['normal']"
						data-paddingtop="[0, 0, 0, 0]" data-paddingright="[15, 15, 15, 15]" data-paddingbottom="[0, 0, 0, 0]"
						data-paddingleft="[15, 15, 15, 15]" data-basealign="slide" data-responsive_offset="on">
						Veget<span>a</span>bles
					</h2>

				</li>

				<li data-transition="fade">

					<img src="<?php echo esc_attr( F2FORGANICS_ASSETS ) . '/images/bg-slide-02.jpg'; ?>" alt="IMG-BG"
						class="rev-slidebg">

					<div class="tp-caption tp-resizeme layer1"
						data-frames="[{&quot;delay&quot;:500,&quot;speed&quot;:1300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:150px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
						data-visibility="['on', 'on', 'on', 'on']" data-fontsize="['35', '35', '35', '35']"
						data-lineheight="['42', '42', '42', '42']" data-color="['#333']"
						data-textAlign="['left', 'left', 'center', 'center']" data-x="['left']" data-y="['center']"
						data-hoffset="['310', '80', '0', '0']" data-voffset="['-78', '-78', '-78', '-150']"
						data-width="['650','650','768','576']" data-height="['auto']" data-whitespace="['normal']"
						data-paddingtop="[0, 0, 0, 0]" data-paddingright="[15, 15, 15, 15]" data-paddingbottom="[0, 0, 0, 0]"
						data-paddingleft="[15, 15, 15, 15]" data-basealign="slide" data-responsive_offset="on">
						<span class="child1">Organic</span> <span class="child2">products</span>
					</div>

					<h2 class="tp-caption tp-resizeme layer2"
						data-frames="[{&quot;delay&quot;:1300,&quot;speed&quot;:1300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:-50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
						data-visibility="['on', 'on', 'on', 'on']" data-fontsize="['75', '75', '75', '75']"
						data-lineheight="['82', '82', '82', '82']" data-color="['#333']"
						data-textAlign="['left', 'left', 'center', 'center']" data-x="['left']" data-y="['center']"
						data-hoffset="['310', '80', '0', '0']" data-voffset="['0', '0', '0', '-30']"
						data-width="['650','650','768','576']" data-height="['auto']" data-whitespace="['normal']"
						data-paddingtop="[0, 0, 0, 0]" data-paddingright="[15, 15, 15, 15]" data-paddingbottom="[0, 0, 0, 0]"
						data-paddingleft="[15, 15, 15, 15]" data-basealign="slide" data-responsive_offset="on">
						Pomegran<span>a</span>te
					</h2>
				</li>


			</ul>
		</div>
	</div>
</section>

<section class="popular-categories p-t-145 p-b-100">
	<div class="container">
		<div class="size-a-1 flex-col-c-m p-b-48">
			<div class="txt-center txt-m-201 cl10 how-pos1-parent m-b-14">
				Popular Categories
				<div class="how-pos1">
					<img src="<?php echo esc_attr( F2FORGANICS_ASSETS ) . '/images/icons/symbol-02.png'; ?>" alt="IMG">
				</div>
			</div>

			<h3 class="txt-center txt-l-101 cl3 respon1">Popular Categories</h3>
		</div>

		<div class="category-grid">
			<?php
			$product_categories = get_terms(
				array(
					'taxonomy'   => 'product_cat',
					// 'orderby'    => 'count',
					// 'order'      => 'DESC',
					'hide_empty' => false,
					'number'     => 11,
				)
			);

			foreach ( $product_categories as $category ) {
				$show = get_term_meta( $category->term_id, 'show_on_homepage', true );

				if ( $show ) {
					$thumbnail_id  = get_term_meta( $category->term_id, 'thumbnail_id', true );
					$image_url     = wp_get_attachment_url( $thumbnail_id );
					$category_link = get_term_link( $category );
					?>
					<div class="category-item">
						<a href="<?php echo esc_url( $category_link ); ?>">
							<div class="category-image">
								<img src="<?php echo esc_url( $image_url ); ?>" alt="<?php echo esc_attr( $category->name ); ?>" />
							</div>

							<p><?php echo esc_html( $category->name ); ?></p>
						</a>
					</div>
				<?php } ?>
			<?php } ?>
		</div>
	</div>
</section>

<section class="sec-welcome bg0 p-t-145" style="background-image: url('<?php echo esc_attr( F2FORGANICS_ASSETS ) . '/images/bg-01.jpg'; ?>');">
	<div class="container">
		<div class="txt-center size-a-1 flex-col-c-m p-b-90">
			<div class="txt-m-201 cl10 how-pos1-parent m-b-14">
				Your Gateway to Healthier Living
				<div class="how-pos1">
					<img src="<?php echo esc_attr( F2FORGANICS_ASSETS ) . '/images/icons/symbol-02.png'; ?>" alt="IMG">
				</div>
			</div>
			<h3 class="txt-center txt-l-101 cl3 respon1 m-b-20">
				welcome to Farm to family organic
			</h3>
			<div class="m-w-1000">
				<p class="m-b-15">At Farm to Family Organic Mall, we are committed to bringing you the purest, freshest,
					and healthiest organic produce from local farms to your family’s table. Our mission is simple: to
					make sustainable, organic living accessible to every household in Rajkot and beyond.</p>
				<p class="m-b-15">We believe that the journey from farm to family should be transparent and rooted in
					trust. That’s why every product on our shelves is handpicked, free from harmful chemicals, and
					sourced from farmers who share our passion for natural, eco-friendly practices. From farm-fresh
					fruits and vegetables to organic dairy, grains, wellness herbal products, and forest products. We
					offer a wide range of goods that promote well-being and a greener planet.</p>
				<p>Join us on this journey towards healthier living, and experience the joy of nourishing your body,
					mind, and soul with nature’s finest. Welcome to a lifestyle where sustainability meets quality, and
					where every choice you make supports a healthier future for you, your family, and the environment.
				</p>
			</div>
		</div>
		<div class="wrap-pic-max-w flex-c-t flex-w p-t-255 item-welcome-parent">
			<img class="size-w-1" src="<?php echo esc_attr( F2FORGANICS_ASSETS ) . '/images/other-01.jpg'; ?>" alt="IMG" style="border-radius: 100px;">

			<div class="item-welcome one">
				<div class="item-welcome-pic pos-relative">
					<div class="wrap-pic-max-w flex-c-m item-welcome-pic-dark trans-04">
						<img src="<?php echo esc_attr( F2FORGANICS_ASSETS ) . '/images/icons/icon1.png'; ?>" alt="IMG">
					</div>
					<div class="wrap-pic-max-w flex-c-m s-full ab-t-l item-welcome-pic-light trans-04">
						<img src="<?php echo esc_attr( F2FORGANICS_ASSETS ) . '/images/icons/icon1.1.png'; ?>" alt="IMG">
					</div>
				</div>
				<div class="item-welcome-txt p-t-27">
					<h4 class="txt-m-101 cl3 txt-center p-b-11">
						100% Organic
					</h4>
					<p class="txt-s-101 cl6 txt-center">
						Pure, natural products free from chemicals and additives.
					</p>
				</div>
			</div>

			<div class="item-welcome two">
				<div class="item-welcome-pic pos-relative">
					<div class="wrap-pic-max-w flex-c-m item-welcome-pic-dark trans-04">
						<img src="<?php echo esc_attr( F2FORGANICS_ASSETS ) . '/images/icons/icon2.png'; ?>" alt="IMG">
					</div>
					<div class="wrap-pic-max-w flex-c-m s-full ab-t-l item-welcome-pic-light trans-04">
						<img src="<?php echo esc_attr( F2FORGANICS_ASSETS ) . '/images/icons/icon2.2.png'; ?>" alt="IMG">
					</div>
				</div>
				<div class="item-welcome-txt p-t-27">
					<h4 class="txt-m-101 cl3 txt-center p-b-11">
						family healthy
					</h4>
					<p class="txt-s-101 cl6 txt-center">
						Family Healthy offers tips and resources for balanced family well-being.
					</p>
				</div>
			</div>

			<div class="item-welcome three">
				<div class="item-welcome-pic pos-relative">
					<div class="wrap-pic-max-w flex-c-m item-welcome-pic-dark trans-04">
						<img src="<?php echo esc_attr( F2FORGANICS_ASSETS ) . '/images/icons/icon3.png'; ?>" alt="IMG">
					</div>
					<div class="wrap-pic-max-w flex-c-m s-full ab-t-l item-welcome-pic-light trans-04">
						<img src="<?php echo esc_attr( F2FORGANICS_ASSETS ) . '/images/icons/icon3.3.png'; ?>" alt="IMG">
					</div>
				</div>
				<div class="item-welcome-txt p-t-27">
					<h4 class="txt-m-101 cl3 txt-center p-b-11">
						Always Fresh
					</h4>
					<p class="txt-s-101 cl6 txt-center">
						Delivering the freshest quality products daily.
					</p>
				</div>
			</div>

			<div class="item-welcome four">
				<div class="item-welcome-pic pos-relative">
					<div class="wrap-pic-max-w flex-c-m item-welcome-pic-dark trans-04">
						<img src="<?php echo esc_attr( F2FORGANICS_ASSETS ) . '/images/icons/icon4.png'; ?>" alt="IMG">
					</div>
					<div class="wrap-pic-max-w flex-c-m s-full ab-t-l item-welcome-pic-light trans-04">
						<img src="<?php echo esc_attr( F2FORGANICS_ASSETS ) . '/images/icons/icon4.4.png'; ?>" alt="IMG">
					</div>
				</div>
				<div class="item-welcome-txt p-t-27">
					<h4 class="txt-m-101 cl3 txt-center p-b-11">
						Food safety
					</h4>
					<p class="txt-s-101 cl6 txt-center">
						Food safety ensures food is handled, prepared, and stored to prevent illness.
					</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="our-products bg0 p-t-145 p-b-100 woocommerce">
	<div class="container">
		<div class="size-a-1 flex-col-c-m p-b-48">
			<div class="txt-center txt-m-201 cl10 how-pos1-parent m-b-14">
				Our Products
				<div class="how-pos1">
					<img src="<?php echo esc_attr( F2FORGANICS_ASSETS ) . '/images/icons/symbol-02.png'; ?>" alt="IMG">
				</div>
			</div>

			<h3 class="txt-center txt-l-101 cl3 respon1">Empowering Growth, Naturally</h3>
		</div>

		<ul class="products">
			<?php
			$args = array(
				'post_type'      => 'product',
				'posts_per_page' => 8,
			);

			$loop = new WP_Query( $args );

			while ( $loop->have_posts() ) :
				$loop->the_post();
				wc_get_template_part( 'content', 'product' );
			endwhile;

			wp_reset_postdata();
			?>
		</ul>
	</div>
</section>

<section class="sec-deal bg-img1" style="background-image: url('<?php echo esc_attr( F2FORGANICS_ASSETS ) . '/images/bg-01.jpg'; ?>');">
	<div class="flex-w flex-m how-pos2-parent">
		<img class="how-pos2 respon4 dis-none-xl"
			src="<?php echo esc_attr( F2FORGANICS_ASSETS ) . '/images/other-03.png'; ?>" alt="IMG">

		<div class="size-w-3 txt-center wrap-pic-max-s w-full-lg">
			<img src="<?php echo esc_attr( F2FORGANICS_ASSETS ) . '/images/other-02.png'; ?>" alt="IMG">
		</div>

		<div class="size-w-4 p-t-105 p-b-90 p-r-15 respon3">
			<div class="p-b-32">
				<div class="txt-m-105 cl6 hov-cl10 trans-04 m-b-30">
					Explore the Best of Organic Living Today
				</div>

				<p class="txt-s-102 cl9 m-b-15">
					Ready to make a healthier choice for you and your family? Visit “Farm to Family Organic” Mall to
					explore our wide range of farm-fresh, organic products that promote wellness and sustainability.
					Whether you're looking for seasonal produce, organic dairy, or eco-friendly household essentials,
					we've got you covered.
				</p>

				<p class="txt-s-102 cl9">
					Prefer to shop from the comfort of your home? Our online store makes it easy to browse and order all
					your favorite organic items with just a few clicks. Enjoy the convenience of doorstep delivery,
					bringing the best of nature straight to your family.
				</p>
			</div>

		</div>
	</div>
</section>

<div class="sec-testimonials bg12 p-t-120 p-b-80 how-pos3-parent how-pos4-parent">
	<img class="how-pos3 dis-none-xl" src="<?php echo esc_attr( F2FORGANICS_ASSETS ) . '/images/other-04.png'; ?>"
		alt="IMG">
	<img class="how-pos4 dis-none-xl" src="<?php echo esc_attr( F2FORGANICS_ASSETS ) . '/images/other-05.png'; ?>"
		alt="IMG">
	<div class="container">

		<div class="wrap-slick3">
			<div class="slick3">
				<div class="item-slick3">
					<div class="flex-col-c-m">
						<div class="layer-slick3 animated visible-false" data-appear="zoomIn" data-delay="100">
							<div class="wrap-pic-s size-a-3 bo-3-rad-50per bocl10 of-hidden">
								<img src="<?php echo esc_attr( F2FORGANICS_ASSETS ) . '/images/avatar-01.jpg'; ?>" alt="AVATAR">
							</div>
						</div>
						<div class="layer-slick3 animated visible-false" data-appear="fadeInUp" data-delay="800">
							<div class="flex-col-c-m p-t-33 p-b-25">
								<span class="txt-l-105 cl3 txt-center p-b-9">
									Amit jani
								</span>
								<span class="fs-16 cl11 txt-center">
									<i class="fa fa-star m-rl-1"></i>
									<i class="fa fa-star m-rl-1"></i>
									<i class="fa fa-star m-rl-1"></i>
									<i class="fa fa-star m-rl-1"></i>
									<i class="fa fa-star m-rl-1"></i>
								</span>
							</div>
						</div>
						<div class="layer-slick3 animated visible-false" data-appear="fadeInUp" data-delay="1600">
							<p class="txt-center txt-s-104 cl6 size-w-8">
								If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't
								anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators
								on the Internet tend to repeat predefined chunks as necessary, making this the first
								true generator on the Internet. It uses a dictionary of over 200 Latin words,
								combined with a handful of model sentence structures, to generate Lorem Ipsum which
								looks reasonable. The generated Lorem Ipsum is therefore always free from
								repetition, injected humour, or non-characteristic words etc.
							</p>
						</div>
					</div>
				</div>
				<div class="item-slick3">
					<div class="flex-col-c-m">
						<div class="layer-slick3 animated visible-false" data-appear="zoomIn" data-delay="100">
							<div class="wrap-pic-s size-a-3 bo-3-rad-50per bocl10 of-hidden">
								<img src="<?php echo esc_attr( F2FORGANICS_ASSETS ) . '/images/avatar-02.jpg'; ?>" alt="AVATAR">
							</div>
						</div>
						<div class="layer-slick3 animated visible-false" data-appear="fadeInUp" data-delay="800">
							<div class="flex-col-c-m p-t-33 p-b-25">
								<span class="txt-l-105 cl3 txt-center p-b-9">
									Ramesh kothiya
								</span>
								<span class="fs-16 cl11 txt-center">
									<i class="fa fa-star m-rl-1"></i>
									<i class="fa fa-star m-rl-1"></i>
									<i class="fa fa-star m-rl-1"></i>
									<i class="fa fa-star m-rl-1"></i>
									<i class="fa fa-star m-rl-1"></i>
								</span>
							</div>
						</div>
						<div class="layer-slick3 animated visible-false" data-appear="fadeInUp" data-delay="1600">
							<p class="txt-center txt-s-104 cl6 size-w-8">
								If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't
								anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators
								on the Internet tend to repeat predefined chunks as necessary, making this the first
								true generator on the Internet. It uses a dictionary of over 200 Latin words,
								combined with a handful of model sentence structures, to generate Lorem Ipsum which
								looks reasonable. The generated Lorem Ipsum is therefore always free from
								repetition, injected humour, or non-characteristic words etc.
							</p>
						</div>
					</div>
				</div>
				<div class="item-slick3">
					<div class="flex-col-c-m">
						<div class="layer-slick3 animated visible-false" data-appear="zoomIn" data-delay="100">
							<div class="wrap-pic-s size-a-3 bo-3-rad-50per bocl10 of-hidden">
								<img src="<?php echo esc_attr( F2FORGANICS_ASSETS ) . '/images/avatar-03.jpg'; ?>" alt="AVATAR">
							</div>
						</div>
						<div class="layer-slick3 animated visible-false" data-appear="fadeInUp" data-delay="800">
							<div class="flex-col-c-m p-t-33 p-b-25">
								<span class="txt-l-105 cl3 txt-center p-b-9">
									Jayesh Savaliya
								</span>
								<span class="fs-16 cl11 txt-center">
									<i class="fa fa-star m-rl-1"></i>
									<i class="fa fa-star m-rl-1"></i>
									<i class="fa fa-star m-rl-1"></i>
									<i class="fa fa-star m-rl-1"></i>
									<i class="fa fa-star m-rl-1"></i>
								</span>
							</div>
						</div>
						<div class="layer-slick3 animated visible-false" data-appear="fadeInUp" data-delay="1600">
							<p class="txt-center txt-s-104 cl6 size-w-8">
								If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't
								anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators
								on the Internet tend to repeat predefined chunks as necessary, making this the first
								true generator on the Internet. It uses a dictionary of over 200 Latin words,
								combined with a handful of model sentence structures, to generate Lorem Ipsum which
								looks reasonable. The generated Lorem Ipsum is therefore always free from
								repetition, injected humour, or non-characteristic words etc.
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="wrap-slick3-dots p-t-50"></div>
		</div>
	</div>
</div>

<?php get_footer(); ?>