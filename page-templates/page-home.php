<?php get_header(); ?>

			<div class="container">

				<div class="intro row">

						<section class="introduction col-6">
							<h2>
								<?php the_field('introduction_title_fp'); ?>
							</h2>
							<?php the_field('introduction_content_fp'); ?>
						</section>
						<section class="featured col-6">
							<?php

							$args = array(
								'post_type'   => 'post',
								'post_count' => 1,
								'category__and' => array( 6 )
							);
							$case_study_query = new WP_Query( $args );
							    while ($case_study_query->have_posts()) : $case_study_query->the_post(); ?>
							    <h2>Latest News</h2>
							    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('half-page-featured'); ?></a>
							 	<a href="<?php the_permalink(); ?>">
									<p class="h3">
										<?php the_title(); ?>
									</p>
								</a>
							    <?php echo wp_trim_words( get_the_content(), 40, '...' ); ?>
								<p class="more">
									<a href="<?php the_permalink(); ?>">Continue Reading >></a>
								</p>￼

							<?php endwhile; wp_reset_postdata(); ?>
						</section>

				</div>
			</div><?php //End of container ?>
			
				<div class="services row ">
					<?php get_template_part('/library/content-modules/services-section/services-2col/2col','hover'); ?>
				</div>
				<div class="call-to-action row">
					<?php get_template_part('/library/content-modules/call-to-action/full-width-stripe/cta','stripe-fw'); ?>
				</div>

				<div class="contact testimonials container">
					<div class="row">
						<section class="testimonial col-6">
							<h3>What People Are Saying</h3>
							<p>
								<span>We have always been able to count on Arrow Components.</span> They have worked on countless projects for us. They have always exceeded our expectations and delivered when we have tight deadlines.
							</p>
							<p class="author">
								<span>Scott "Woody" Woodruff</span> <span class="seperator"> | </span>JEGS, Director of Media & Motorsports Marketing</|>
								<img src="<?php bloginfo('template_directory');?>/library/images/client-logos/jegsLogo.png" alt="Jegs Performance Logo">

							</p>
							<p class="center">
								<!-- ￼<a href="#">More Testimonials >></a> -->
							</p>




						</section>
						<section class="contact col-6">
							<h3>Have a Specific Question We Can Answer?</h3>
							<?php echo do_shortcode('[gravityform id=1 title=false description=false ajax=true tabindex=49]'); ?>
							<p class="callus">
								Or call us at <a href="tel:18009931179">763.712.0200</a>
							</p>
						</section>
					</div>
				</div>

				
					<div class="separator">

					</div>

				<section class="video-bkg row">
					<?php get_template_part('/library/content-modules/call-to-action/video-bkg-wbtn/video','bkgwbtn'); ?>
				</section>
				
				<div class="good-company row">

					<h2>You're In Good Company</h2>
					<p>
						Below are some of our customers. <!-- ￼Read what <a href="#">they have to say</a> about us. -->
					</p>

					<ul>
						<li><img src="<?php bloginfo('template_directory');?>/library/images/client-logos/oakleyLogo.png" alt="Oakley logo"></li>
						<li><img src="<?php bloginfo('template_directory');?>/library/images/client-logos/adamsPolishes.png" alt="Adams's Polishes logo"></li>
						<li><img src="<?php bloginfo('template_directory');?>/library/images/client-logos/foxRacingLogo.png" alt="Fox Racing logo"></li>
						<li><img src="<?php bloginfo('template_directory');?>/library/images/client-logos/bfgoodrichLogo.png" alt="BF Goodrich logo"></li>
						<li><img src="<?php bloginfo('template_directory');?>/library/images/client-logos/edelbrockLogo.png" alt="Edelbrock logo"></li>
						<li><img src="<?php bloginfo('template_directory');?>/library/images/client-logos/jegsLogo.png" alt="Jegs logo"></li>
						<li><img src="<?php bloginfo('template_directory');?>/library/images/client-logos/ngkSparkPlugsLogo.png" alt="NGK SPark Plugs logo"></li>
						<li><img src="<?php bloginfo('template_directory');?>/library/images/client-logos/patronLogo.png" alt="Patron Tequila logo"></li>
						<li><img src="<?php bloginfo('template_directory');?>/library/images/client-logos/rigidLogo.png" alt="Rigid logo"></li>
						<li><img src="<?php bloginfo('template_directory');?>/library/images/client-logos/vallenLogo.png" alt="Vallen logo"></li>
					</ul>

				</div>


<?php get_footer(); ?>
