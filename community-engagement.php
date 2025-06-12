<?php
/*
Template Name: Community Engagement Page
*/
get_header(); ?>

<section class="how-overlay2 bg-img1" style="background-image: url(<?php echo esc_attr( F2FORGANICS_ASSETS ) . '/images/bg-07.jpg'; ?>);">
	<div class="container">
		<div class="txt-center p-t-160 p-b-165">
			<h2 class="txt-l-101 cl0 txt-center p-b-14 respon1">
				Community Engagement
			</h2>
			<span class="txt-m-201 cl0 flex-c-m flex-w">
				<a href="<?php echo esc_attr( get_home_url() ); ?>" class="txt-m-201 cl0 hov-cl10 trans-04 m-r-6">Home</a>
				<span>/ Community Engagement</span>
			</span>
		</div>
	</div>
</section>

<section class="sec-practice bg12 p-t-145 p-b-70">
	<div class="container">
		<div class="txt-center size-a-1 flex-col-c-m p-b-70">
			<div class="txt-m-201 cl10 how-pos1-parent m-b-14">
				Learn About Processes
				<div class="how-pos1">
					<img src="<?php echo esc_attr( F2FORGANICS_ASSETS ) . '/images/icons/symbol-02.png'; ?>" alt="IMG">
				</div>
			</div>
			<h3 class="txt-center txt-l-101 cl3 respon1 m-b-30">
				Community Engagement
			</h3>
			<div class="m-w-1000">
				<p>At Farm to Family Organic Mall, we believe in building a strong community centered around health,
					sustainability, and organic living. We actively engage with our customers through various
					initiatives that inspire and educate, fostering a deeper connection between families, farmers, and
					the food they consume.</p>
			</div>
		</div>
		<div class="flex-w flex-sb flex-str tab01">
			<div class="size-w-37 w-full-md m-b-30 tab01-arrow">

				<ul class="bg0 nav nav-tabs" role="tablist">
					<li class="nav-item flex-col-str">
						<a class="flex-c-m txt-m-119 cl6 nav-link active" data-toggle="tab" href="#tab-01"
							role="tab">Workshops & Events</a>
					</li>
					<li class="nav-item flex-col-str">
						<a class="flex-c-m txt-m-119 cl6 nav-link" data-toggle="tab" href="#tab-02" role="tab">Farm
							Tours</a>
					</li>
					<li class="nav-item flex-col-str">
						<a class="flex-c-m txt-m-119 cl6 nav-link" data-toggle="tab" href="#tab-03" role="tab">Customer
							Stories</a>
					</li>
				</ul>
			</div>
			<div class="size-w-38 bg0 p-rl-75 p-tb-60 p-rl-15-sm w-full-md m-b-30">

				<div class="tab-content">

					<div class="tab-pane fade show active" id="tab-01" role="tabpanel">
						<div class="flex-w flex-sb-m">
							<div class="size-w-3 wrap-pic-w w-full-lg p-tb-15">
								<img src="<?php echo esc_attr( F2FORGANICS_ASSETS ) . '/images/practice-01.jpg'; ?>" alt="IMG">
							</div>
							<div class="size-w-39 w-full-lg p-tb-15">
								<h4 class="txt-m-118 cl3 p-t-10 p-b-20">
									Workshops & Events
								</h4>
								<p class="txt-s-112 cl6 p-b-31">
									We regularly organize a variety of events to help our community embrace a healthier
									lifestyle. From organic cooking classes led by expert chefs to wellness workshops
									and nutrition talks by professionals, our events are designed to empower you with
									the knowledge and tools to live a more balanced life. We also invite organic farmers
									to share their experiences and insights, giving you a firsthand look at the
									importance of sustainable agriculture.
								</p>
							</div>
						</div>
					</div>

					<div class="tab-pane fade" id="tab-02" role="tabpanel">
						<div class="flex-w flex-sb-m">
							<div class="size-w-3 wrap-pic-w w-full-lg p-tb-15">
								<img src="<?php echo esc_attr( F2FORGANICS_ASSETS ) . '/images/practice-02.jpg'; ?>" alt="IMG">
							</div>
							<div class="size-w-39 w-full-lg p-tb-15">
								<h4 class="txt-m-118 cl3 p-t-10 p-b-20">
									Farm Tours
								</h4>
								<p class="txt-s-112 cl6 p-b-31">
									Experience organic farming up close! We offer guided farm tours for families,
									schools, and community groups, providing an educational and hands-on look at how our
									food is grown. These tours give participants an opportunity to learn about
									sustainable farming practices, understand the farm-to-table process, and see the
									dedication that goes into producing high-quality organic produce.
								</p>
							</div>
						</div>
					</div>

					<div class="tab-pane fade" id="tab-03" role="tabpanel">
						<div class="flex-w flex-sb-m">
							<div class="size-w-3 wrap-pic-w w-full-lg p-tb-15">
								<img src="<?php echo esc_attr( F2FORGANICS_ASSETS ) . '/images/practice-03.jpg'; ?>" alt="IMG">
							</div>
							<div class="size-w-39 w-full-lg p-tb-15">
								<h4 class="txt-m-118 cl3 p-t-10 p-b-20">
									Customer Stories
								</h4>
								<p class="txt-s-112 cl6 p-b-31">
									We love hearing from our customers! Our Customer Stories section features
									testimonials and success stories from families who have made the switch to organic
									living. These stories highlight the benefits they’ve experienced, from improved
									health to a greater sense of connection with the food they eat. By sharing these
									journeys, we hope to inspire others to embrace the organic lifestyle and experience
									the positive changes it brings.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>