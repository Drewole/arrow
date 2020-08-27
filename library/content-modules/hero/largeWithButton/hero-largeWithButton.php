

<?php if (get_field('add_hero_fphero')) : ?>

    <div class="hero" style="background-image: url(<?php the_field('hero_image_fphero');?>);">
        <?php if (get_field('primary_title_fphero')) : ?>
        <section>
        <!-- ￼<img class="hero-logo" src="<?php //echo get_template_directory_uri(); ?>/library/images/arrowLogo.png" alt="Arrow Components Logo" class="logo"> -->
        <?php echo file_get_contents( get_template_directory_uri() . '/library/images/svg/arrowLogo.svg'); ?>
            <?php if (get_field('primary_title_fphero')) : ?>
                <h2><?php the_field('primary_title_fphero'); ?></h2>
            <?php endif; ?>

            <?php if (get_field('secondary_title_fphero')) : ?>
                <p class="subTitle"><?php the_field('secondary_title_fphero'); ?></p>
            <?php endif; ?>

            <?php if (get_field('primary_btntxt_fphero')) : ?>
                <p>

                    <a
                        <?php
                            $videourl = get_field('button_url_fphero');
                            if (strpos($videourl, 'youtube') !== false) { ?>
                                data-lity
                            <?php } elseif (strpos($videourl, 'vimeo') !== false) { ?>
                                data-lity
                            <?php }else { } ?>

                    class="green btn" href="<?php the_field('button_url_fphero'); ?>">
                        <?php echo file_get_contents( get_template_directory_uri() . '/library/images/svg/playIcon.svg'); ?>

                        <?php the_field('primary_btntxt_fphero'); ?>

                    </a>
                </p>
            <?php endif; ?>

        </section>
        <?php endif; ?>
    </div>

<?php else: ?>

<?php endif; ?>
