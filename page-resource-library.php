<?php
/* Template Name: Resources Page*/
get_header();
?>

	<section class="static-no-slider green-logos-bg text-section">
		<div class="container">
			<div class="col-md-7 col-sm-8 col-xs-12 no-x-padding">
				<?php
				while ( have_posts() ) : the_post();
					?>
					<h1 class="underlined-heading white-underlined wow fadeInRight" data-wow-duration="0.5s"><?php the_title();?></h1>
					<h3 class="wow fadeInRight" data-wow-duration="0.5s""><?php nl2br(strip_tags(the_content()));?></h3>
					<?php
				endwhile; // End of the loop.
				?>
			</div>
		</div>
	</section>

	<?php
		$slug = get_post_field( 'post_name', get_post() );
		if ( $slug == 'resource-library' )
		{
			get_template_part( 'template-parts/section', 'resources-filter' );
		}
	?>

	<?php get_template_part( 'template-parts/section', 'resources-grid' ); ?>
	
<?php get_footer(); ?>