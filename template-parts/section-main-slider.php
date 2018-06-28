<section class="main-slider-container">
	<div class="main-slider owl-carousel">
		<?php
		$args = array( 'posts_per_page' => 5, 'post_type' => 'homepage-slide' );
		$slides = get_posts( $args );
		if ( sizeof($slides) > 0 )
		{
			foreach( $slides as $slide )
			{
				$display_watch_button = get_post_meta($slide->ID, 'wpcf-display-watch-demo-button', true);
				$display_features_button = get_post_meta($slide->ID, 'wpcf-display-features-button', true);

				?>
				<div class="one-slide">
					<div class="container">
						<div class="slide-text col-md-6 col-sm-6 col-xs-8">
							<h1><?php echo $slide->post_title?></h1>
							<p><?php echo nl2br($slide->post_content)?></p>
							<?php
							if ( $display_watch_button )
							{
								?><a href="<?php echo get_post_meta($slide->ID, 'wpcf-watch-demo-button-url', true)?>" target="_blank" class="brinqa-btn white-btn"><?php echo get_post_meta($slide->ID, 'wpcf-watch-demo-button-title', true)?></a><?php
							}
							if ( $display_features_button )
							{
								?><a href="<?php echo get_post_meta($slide->ID, 'wpcf-see-features-button-url', true)?>" target="_blank" class="brinqa-btn empty-btn"><?php echo get_post_meta($slide->ID, 'wpcf-see-features-button-title', true)?></a><?php
							}
							?>
						</div>
					</div>
					<div class="slide-image"><img src="<?php echo get_post_meta($slide->ID, 'wpcf-homepage-slide-image', true)?>"></div>
				</div>
				<?php
			}
			wp_reset_postdata();
		}
		?>
	</div>
</section>
