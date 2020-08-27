<section class="3col-hover">
    <h3 class="services-title">Our Portfolio of Services</h3>

    <div class="services">

        <?php

            $child_pages_query_args = array(
                'post_type'   => 'page',
                'post_parent' => 7,
                'orderby'     => 'menu_order',
                'order'       => 'ASC'
            );

            $the_query = new WP_Query($child_pages_query_args);

            while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <div class="preview-image col-4">
                <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID)); ?>
                <a href="<?php echo $url ?>"><?php the_post_thumbnail('services-image-desktop'); ?></a>


                <a class="" href="<?php the_permalink(); ?>">
                    <div class="services-image-overlay image-overlay">
                        <div class="image-overlay-text">
                            <?php //<p class="impact-statement">No Compromises</p>?>
                            <p class="points"><?php the_field('services_three_points_fp');?></p>
                            <p class="svg"><?php echo file_get_contents( get_template_directory_uri() . '/library/images/svg/searchIcon.svg'); ?></p>
                        </div>
                    </div>

                            <p class="service-title"><?php the_title(); ?></p>



                </a>
            </div>


        <?php endwhile; wp_reset_postdata(); ?>

    </div><?php //End Services Div ?>


</section>
