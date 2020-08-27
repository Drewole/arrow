<section class="2col-hover services-section">
    <h3 class="services-title">Our Products</h3>

    <div class="services">

        <div class="2-column top">
            <?php

            $child_pages_query_args = array(
                'post_type'   => 'page',
                'post__in'      => array(65,63),
                'order'       => 'DESC'
            );

            $the_query = new WP_Query($child_pages_query_args);

            while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <div class="preview-image preview-image-large">
                <p class="service-title"><?php the_title(); ?></p>
                <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID)); ?>
                <a href="<?php echo $url ?>"><?php the_post_thumbnail('services-image-desktop'); ?></a>


                <a class="" href="<?php the_permalink(); ?>">
                    <div class="services-image-overlay image-overlay">
                        <div class="image-overlay-text">
                            <p class="impact-statement"><?php the_field('ss_impact_statement'); ?></p>
                            <p class="points"><?php the_field('ss_three_points');?></p>
                            <p class="svg"><?php echo file_get_contents( get_template_directory_uri() . '/library/images/svg/searchIcon.svg'); ?></p>
                        </div>
                    </div>
                </a>
            </div>
            <?php endwhile; wp_reset_postdata(); ?>


                
        </div><?php //End of 2-column Div ?>

        <div class="3-column bottom">
            <?php

            $child_pages_query_args = array(
                'post_type'   => 'page',
                'post__in'      => array(60,57,55),
                'order'       => 'DESC'
            );

            $the_query = new WP_Query($child_pages_query_args);

            while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <div class="preview-image">
                <p class="service-title"><?php the_title(); ?></p>
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

                            



                </a>
            </div>
            <?php endwhile; wp_reset_postdata(); ?>

        </div><?php //End of 3-column Div ?>

        

    </div><?php //End Services Div ?>


</section>
