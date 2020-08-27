
<div class="stripe-cta row">
    <div class="col-12">
        <p><?php the_field('cta_fws_content'); ?>
            <a class="darkgreen btn" href="<?php the_field('cta_fws_btnlink'); ?>"><?php the_field('cta_fws_btntxt'); ?> <?php echo file_get_contents( get_template_directory_uri() . '/library/images/svg/emailBtnIcon.svg'); ?></a>
        </p>
    </div>
</div>
