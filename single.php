<?php get_header(); ?>

<header class="page-title">
	<h1><?php the_title(); ?></h1>
</header>

	<div class="container">

		<div class="row">

				<main id="main" class="col-8 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<article class="article">
						<section class="entry-content cf" itemprop="articleBody">
							<?php the_content(); ?>
						</section> <?php // end article section ?>
					</article>

					<?php endwhile; endif; ?>

				</main>

				<?php get_sidebar(); ?>

		</div>

	</div><?php //End of container ?>
	<div class="services row ">
		<?php get_template_part('/library/content-modules/services-section/services-3col/3col','hover'); ?>
	</div>

<?php get_footer(); ?>
