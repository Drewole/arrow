<?php get_header(); ?>



				<?php if (is_front_page()): //Homepage template ?>

					<?php get_template_part('/page-templates/page','home'); ?>

				<?php elseif(is_page(array(55,65,63,60,57)))://all product pages template ?>

					<?php get_template_part('/page-templates/page','hero'); ?>

				<?php elseif(is_page(111)): //Latest News?>
					<?php get_template_part('/page-templates/page','news'); ?>

				<?php elseif(is_page(125)): //contact page template ?>
					<?php get_template_part('/page-templates/page','contact'); ?>

				<?php elseif(is_page(52)): ?>

					<header class="page-title">
						<h1><?php the_title(); ?></h1>
					</header>
					<section class="products-intro">
						<?php if(get_field('pp_intro')): ?>
						
						<?php the_field('pp_intro'); ?>

						<?php else: ?>

						<?php endif; ?>

					</section>

					<div class="services row">
						<?php get_template_part('/library/content-modules/services-section/services-2col/2col','hover'); ?>
					</div>


				<?php else: ?>

					<?php get_template_part('/page-templates/page','basic'); ?>

				<?php endif; ?>



<?php get_footer(); ?>
