<?php /* Template Name: Gated Resource Page*/ ?>
<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>

	<?php get_template_part( 'template-parts/section', 'heading-on-green-bg' ); ?>

	<section class="text-section page-content-section resource-page">
		<div class="container">
			<div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
					<?php the_content();?>
                </div>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<?php gravity_form('Gated Resource', false, false, false, null, false, 10); ?>
				</div>
			</div>
		</div>
	</section>


<?php endwhile; // End of the loop. ?>


<?php get_footer(); ?>
