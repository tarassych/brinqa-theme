<?php /* Template Name: Connectors Page*/ ?>
<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>

	<?php get_template_part( 'template-parts/section', 'heading-on-green-bg' ); ?>

<?php endwhile; // End of the loop. ?>

<section class="text-section greyed">
	<div class="container no-x-padding">
		<?php
		$args = array( 'posts_per_page' => -1, 'post_type' => 'connector', 'orderby'=> 'title', 'order' => 'ASC');
		$connectors = get_posts( $args );

		if ( sizeof($connectors) > 0 )
		{
			foreach( $connectors as $one_connector )
			{
				set_query_var('one_connector', $one_connector);
				get_template_part( 'template-parts/element', 'connector-post' );
			}
		}
		?>
	</div>
</section>

<?php get_footer(); ?>
