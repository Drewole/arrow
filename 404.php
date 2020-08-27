<?php get_header(); ?>

			<header class="page-title">
			    <h1><?php the_title(); ?></h1>
			</header>

			    <div class="container">

			        <div class="row">

			                <main id="main" class="col-12 cf page-not-found" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
								<p class="svg">
									<?php echo file_get_contents( get_template_directory_uri() . '/library/images/svg/404image.svg'); ?>
								</p>
								<p>Page Not Found</p>
								<form role="search" method="get" id="searchform" class="searchform" action="<?php echo site_url(); ?>">
								<div>
								<label class="screen-reader-text" for="s">Search for:</label>
								<input class="search-field" placeholder="Search the site.." type="text" value="" name="s" id="s" />
								<input class="green btn" type="submit" id="searchsubmit" value="Search" />
								</div>
								</form>
								<h3>Maybe one of these pages help?</h3>

								<nav itemscope itemtype="http://schema.org/SiteNavigationElement">
									<?php wp_nav_menu(array(
			    					         'container' => false,                           // remove nav container
			    					         'container_class' => 'menu cf',                 // class of container (should you choose to use it)
			    					         'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
			    					         'menu_class' => 'nav top-nav cf',               // adding custom nav class
			    					         'theme_location' => 'main-nav',                 // where it's located in the theme
			    					         'before' => '',                                 // before the menu
			        			               'after' => '',                                  // after the menu
			        			               'link_before' => '',                            // before each link
			        			               'link_after' => '',                             // after each link
			        			               'depth' => 0,                                   // limit the depth of the nav
									)); ?>

								</nav>
			                </main>

			        </div>

			    </div><?php //End of container ?>
			<div class="services row">
			    <?php get_template_part('/library/content-modules/services-section/services-3col/3col','hover'); ?>
			</div>

<?php get_footer(); ?>
