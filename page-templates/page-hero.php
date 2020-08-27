<?php get_header(); ?>

		<header class="page-title">
			<h1><?php the_title(); ?></h1>
		</header>
			
			<div class="container">

						<main id="main" class="col-16 cf products-intro" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article class="article">
								<section class="entry-content cf" itemprop="articleBody">
									<?php the_content(); ?>
								</section> <?php // end article section ?>
							</article>

							<?php endwhile; endif; ?>

						</main>

			</div><?php //End of container ?>
			<section class="content content-tabs row">
					<?php get_template_part('/library/content-modules/content-layout/tabs/content','tabs'); ?>
			</section>

<?php get_footer(); ?>
