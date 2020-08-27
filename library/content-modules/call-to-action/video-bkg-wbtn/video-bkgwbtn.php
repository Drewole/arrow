<?php 
    $link = get_field('vid_bkg_btnurl');
    if( $link ): 
        $link_url = $link['url'];
        $link_title = $link['title'];
        $link_target = $link['target'] ? $link['target'] : '_self';
    endif;
?>

<div class="video-bkg-video">
    <?php if ( wp_is_mobile() ) : ?>
    <video type="video/mp4" src="" poster="<?php echo get_template_directory_uri(); ?>/library/images/videoCover.jpg"  muted loop></video>
    <?php else : ?>
        <video type="video/mp4" src="<?php the_field('vid_bkg_video'); ?>" poster="<?php echo get_template_directory_uri(); ?>/library/images/videoCover.jpg" autoplay muted loop preload="auto"></video>
    <?php endif; ?>
    
</div>
<div class="video-bkg-content">
    <h2><?php the_field('vid_bkg_title'); ?></h2>
    <p><?php the_field('vid_bkg_txt'); ?></p>



    <a href="<?php echo $link_url; ?>" class="btn darkgreen"><?php the_field('vid_bkg_btntxt'); ?></a>
</div>