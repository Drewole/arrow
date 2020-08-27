<header class="page-title">
    <h1><?php the_title(); ?></h1>
</header>

    <div class="container">

        <div class="row">

                <main id="main" class="col-8 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
                    <?php

                        $the_query = new WP_Query( array( 'cat' => 6 ) );

                        while ($the_query->have_posts()) : $the_query->the_post(); ?>

                        <article class="article">
                            <section class="entry-content cf" itemprop="articleBody">
                                <h2><?php the_title(); ?></h2>
                                <?php the_excerpt(); ?>
                            </section> <?php // end article section ?>
                        </article>

                    <?php endwhile; wp_reset_postdata(); ?>

                </main>

                <?php get_sidebar(); ?>

        </div>

    </div><?php //End of container ?>
<div class="services row">
    <?php get_template_part('/library/content-modules/services-section/services-2col/2col','hover'); ?>
</div>
