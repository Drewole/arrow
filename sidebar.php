<div id="general-sidebar" class="sidebar col-4 cf" role="complementary">

	<?php if (is_page(array(25,27,21,19,17,23))): ?>

		<?php // Lists any child service pages
			$page_id  = get_queried_object_id();
			$args = array(
				'sort_column' => 'menu_order',
				'child_of' => $page_id,
				'depth'    => 1,
				'title_li' => ""
			);
		?>
		<ul>
			<?php wp_list_pages($args);  ?>
		</ul>
			<?php if ( is_active_sidebar( 'general-sidebar' ) ) : ?>

				<?php dynamic_sidebar( 'general-sidebar' ); ?>

			<?php else : ?>


			<?php endif; ?>
	<?php elseif (is_page( 13 )): ?>
			<div class="career widget_text widget">
				<h3>Looking for a career at ProAct?</h3>
				<a class="btn green specialist" href="https://careers.evoqua.com/?utm_campaign=evoqua-careers">Submit Your Resume <img src="https://proact-usa.com/wp-content/uploads/2017/10/sidebarEmailIcon.png" alt=""></a>
			</div>
	<?php elseif (is_page( 15 )): ?>
			<div class="career widget_text widget">
				<a class="btn green specialist" href="https://careers.evoqua.com/?utm_campaign=evoqua-careers">Application  Form <img src="https://proact-usa.com/wp-content/uploads/2017/10/sidebarEmailIcon.png" alt=""></a>
			</div>

	<?php else:  ?>
			<?php if ( is_active_sidebar( 'general-sidebar' ) ) : ?>

				<?php dynamic_sidebar( 'general-sidebar' ); ?>

			<?php else : ?>


			<?php endif; ?>

	<?php endif; ?>



</div>
