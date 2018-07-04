<section class="clients">
	<div class="container no-overflow">
		<div class="clients-slider owl-carousel">
			<?php
			$args = array( 'posts_per_page' => -1, 'post_type' => 'clients' );
			$clients = get_posts( $args );
			if ( sizeof($clients) > 0 )
			{
				foreach( $clients as $client )
				{
					?>
					<div class="one-client-slide">
						<img src="<?php echo get_post_meta($client->ID, 'wpcf-client-logo', true);?>">
					</div>
					<?php
				}
			}
			?>
		</div>
	</div>
</section>