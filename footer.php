            <?php get_template_part('/page-templates/template', 'sections');?>

            <div class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

			<?php if (is_page(array(50, 125))): //This displays the bottom contact form on all pages but the home page and contact ?>

				<?php else: ?>
				<?php get_template_part('/library/content-modules/forms/large-footer-contact/fw', 'large-footer-contact');?>
			<?php endif;?>

				<footer class="row" role="top-footer">
					<div class="container">
						<div class="footer-services videos col-4">
							<h3>Products</h3>
							<ul>
								<?php
$footer_products_args = array(
    'post_type' => 'page',
    'post_parent' => 52,
    'order' => 'DESC',
);

$the_query = new WP_Query($footer_products_args);

while ($the_query->have_posts()): $the_query->the_post();?>

							                    <li><a href="<?php the_permalink();?>"><?php the_title();?></a></li>


							        <?php endwhile;
wp_reset_postdata();?>
							</ul>


						</div><?php //End of footer-services videos col-4 ?>
						<div class="shop-online col-4">
							<h3>Online Store</h3>
							<div class="product">

								<a href="https://mkt.com/arrowcomp/item/flip-bench" target="_blank">
								<div class="overlay svg">
										<?php echo file_get_contents(get_template_directory_uri() . '/library/images/svg/cart.svg'); ?>
									</div>
									<img src="<?php bloginfo('template_directory');?>/library/images/flipBenchProduct.jpg" alt="Picture of the Flip up bench accessory">

								</a>
							</div>
							<div class="product">
								<a data-lity href="https://mkt.com/arrowcomp/item/door-tray-1" target="_blank">
									<img src="<?php bloginfo('template_directory');?>/library/images/doorTrayProduct.jpg" alt="Fold up door tray for holding a variety of items for easy access.">
									<div class="overlay svg">
										<?php echo file_get_contents(get_template_directory_uri() . '/library/images/svg/cart.svg'); ?>
									</div>
								</a>
							</div>
							<div class="product">
								<a data-lity href="https://mkt.com/arrowcomp/item/fuel-jug-holder" target="_blank">
									<img src="<?php bloginfo('template_directory');?>/library/images/fuelJugProduct.jpg" alt="Holds two fuel jugs">
									<div class="overlay svg">
										<?php echo file_get_contents(get_template_directory_uri() . '/library/images/svg/cart.svg'); ?>
									</div>
								</a>
							</div>

							<a target="_blank" href="https://mkt.com/arrowcomp?square_lead=button" class="btn green">Visit Store</a>
						</div>

						<div class="footer-location col-4">
							<h3>Address</h3>
									<div class="location">

										<p class="h3"><?php the_field('footer_address_name', 'option');?></p>
                                        <p><?php the_field('footer_address', 'option');?><br>
                                            <a class="directions" href="<?php echo home_url(); ?>/contact-us">Get Directions</a></p>
                                        <p>Phone: <a href="tel:<?php the_field('footer_address_phone', 'option');?>"><?php the_field('footer_address_phone', 'option');?></a></p>
                                        <p><a target="_blank" href="https://www.facebook.com/arrowcomponents" class="social"><i class="fab fa-facebook-f"></i></a></p>

									</div>
							<div id="footer_map"></div>


						</div>
					</div>
				</footer><?php //End of top-footer  ?>


				<footer class="row" role="bottom-footer">
					<div class="col-12">



						<nav role="navigation">
							<?php wp_nav_menu(array(
    'container' => 'div', // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
    'container_class' => 'footer-links cf', // class of container (should you choose to use it)
    'menu' => __('Footer Links', ''), // nav name
    'menu_class' => 'footer-nav cf', // adding custom nav class
    'theme_location' => 'footer-links', // where it's located in the theme
    'before' => '', // before the menu
    'after' => '', // after the menu
    'link_before' => '', // before each link
    'link_after' => '', // after each link
    'depth' => 0, // limit the depth of the nav
));?>
						</nav>

						<p class="copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name');?>. <span class="sitecreds">| Built By<a target="_blank" href="http://drewolsen.design"> Drew</a></span></p>

					</div>
				</footer><?php //End of bottom-footer  ?>


			</div><?php //End of footer ?>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer();?>
        <script src="https://kit.fontawesome.com/56a7cebe29.js" crossorigin="anonymous"></script>

    <script>

        //google maps
        function initMap() {
            // The location of Arrow
            var arrowLocation = {lat: 45.221090,lng: -93.424540 };

            // The map, centered at Arrow
            var map = new google.maps.Map(
                document.getElementById('map'), {
                    zoom: 12,
                    center: arrowLocation,
                    styles: [
                        {elementType: 'geometry', stylers: [{color: '#242f3e'}]},
                        {elementType: 'labels.text.stroke', stylers: [{color: '#242f3e'}]},
                        {elementType: 'labels.text.fill', stylers: [{color: '#746855'}]},
                        {
                        featureType: 'administrative.locality',
                        elementType: 'labels.text.fill',
                        stylers: [{color: '#d59563'}]
                        },
                        {
                        featureType: 'poi',
                        elementType: 'labels.text.fill',
                        stylers: [{color: '#d59563'}]
                        },
                        {
                        featureType: 'poi.park',
                        elementType: 'geometry',
                        stylers: [{color: '#263c3f'}]
                        },
                        {
                        featureType: 'poi.park',
                        elementType: 'labels.text.fill',
                        stylers: [{color: '#6b9a76'}]
                        },
                        {
                        featureType: 'road',
                        elementType: 'geometry',
                        stylers: [{color: '#38414e'}]
                        },
                        {
                        featureType: 'road',
                        elementType: 'geometry.stroke',
                        stylers: [{color: '#212a37'}]
                        },
                        {
                        featureType: 'road',
                        elementType: 'labels.text.fill',
                        stylers: [{color: '#9ca5b3'}]
                        },
                        {
                        featureType: 'road.highway',
                        elementType: 'geometry',
                        stylers: [{color: '#746855'}]
                        },
                        {
                        featureType: 'road.highway',
                        elementType: 'geometry.stroke',
                        stylers: [{color: '#1f2835'}]
                        },
                        {
                        featureType: 'road.highway',
                        elementType: 'labels.text.fill',
                        stylers: [{color: '#f3d19c'}]
                        },
                        {
                        featureType: 'transit',
                        elementType: 'geometry',
                        stylers: [{color: '#2f3948'}]
                        },
                        {
                        featureType: 'transit.station',
                        elementType: 'labels.text.fill',
                        stylers: [{color: '#d59563'}]
                        },
                        {
                        featureType: 'water',
                        elementType: 'geometry',
                        stylers: [{color: '#17263c'}]
                        },
                        {
                        featureType: 'water',
                        elementType: 'labels.text.fill',
                        stylers: [{color: '#515c6d'}]
                        },
                        {
                        featureType: 'water',
                        elementType: 'labels.text.stroke',
                        stylers: [{color: '#17263c'}]
                        }
                    ]
                });


            // The marker, positioned at Arrow
            var marker = new google.maps.Marker({
                position: arrowLocation,
                map: map,
                icon: {
                    size: new google.maps.Size(50,61),
                    url: 'https://res.cloudinary.com/drewole/image/upload/v1588787009/arrowloc_btztaw.svg'
                }
            });
        }
    </script>
    <!-- ￼<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAsmduYsYGfN2LrdJCGMbcTBR72OLZCjdI&callback=initMap"
    async defer></script> -->
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAsmduYsYGfN2LrdJCGMbcTBR72OLZCjdI&callback=initMap"></script> -->
    <?php //End of google maps code and script ?>


	</body>

</html> <!-- end of site. what a ride! -->
