<header class="page-title">
    <h1><?php the_title(); ?></h1>
</header>
<?php //Google Maps div where the map is rendered. ?>
<div id="map"></div>

<div class="directions">
    <p class="address">6230 Mckinley St. Ramsey, MN 55303</p>
    <form action="http://maps.google.com/maps" method="get" target="_blank">
    <label for="saddr">Get Directions</label>
    <input type="text" name="saddr" placeholder="Enter Starting Location" />
    <input type="hidden" name="daddr" value="<?php the_field('footer_address', 'option'); ?>" />
    <input class="green btn" type="submit" value="Get directions" />
    </form>
</div>


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

