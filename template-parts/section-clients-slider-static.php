<section class="clients">
	<div class="container no-overflow">
		<div class="clients-slider">
			<?php
			$args = array( 'posts_per_page' => -1, 'post_type' => 'clients' );
			$clients = get_posts( $args );
			if ( sizeof($clients) > 0 )
			{
				foreach( array_chunk($clients, 2) as $client )
				{
					?>
					<div class="one-client-slide">
					
					<div class="flip">
					<?php foreach($client as $key => $cl) { ?>
					<div class="<?php echo ($key == '0') ? 'front' : 'back'; ?>">
						<img src="<?php echo get_post_meta($cl->ID, 'wpcf-client-logo', true);?>">
						</div>
						<?php } ?>

					</div>
					
					</div>
					<?php
				}
			}
			?>
		</div>
	</div>
</section>