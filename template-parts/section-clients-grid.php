<section class="clients">
	<div class="container no-overflow">
		<div class="clients-grid row">
  			<?php
  			$args = array( 'posts_per_page' => -1, 'post_type' => 'clients' );
  			$clients = get_posts( $args );
  			if ( sizeof($clients) > 0 )
  			{
          $i = 0;
  				foreach( $clients as $client )
  				{
  					?>
  					<div class="single-client col-sm-4 <?php if($i >= 6) : ?>hidden<?php endif; ?>">
              <div class="front">
                <img src="<?php echo get_post_meta($client->ID, 'wpcf-client-logo', true);?>">
              </div>
              <div class="back">
                <img src="<?php echo get_post_meta($client->ID, 'wpcf-client-logo', true);?>" alt="">
              </div>
            </div>
  					<?php
  				  $i++;
          }
  			}
  			?>
		</div>
	</div>
</section>
