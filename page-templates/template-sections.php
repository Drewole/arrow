<?php if(get_field('add_ss') == 1): ?>
    <div class="services row">
        <?php get_template_part('/library/content-modules/services-section/services-2col/2col','hover'); ?>
    </div>
<?php else: ?>

<?php endif; ?>

<?php if(get_field('two-image-add') == 1): ?>
    <section class="grid-panel-container row">
        <?php get_template_part('/library/content-modules/gallerys/images-gridPanel/images','gridPanel'); ?>
    </section>
<?php else: ?>

<?php endif; ?>

<?php if(get_field('vid_bkg_add') == 1): ?>
    <section class="video-bkg row">
        <?php get_template_part('/library/content-modules/call-to-action/video-bkg-wbtn/video','bkgwbtn'); ?>
    </section>
<?php else: ?>

<?php endif; ?>




