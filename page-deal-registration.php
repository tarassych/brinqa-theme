<?php /* Template Name: Deal Registration Page*/ ?>
<?php get_header();?>

<?php while ( have_posts() ) : the_post(); ?>

	<?php get_template_part( 'template-parts/section', 'heading-on-computer-bg' ); ?>

<?php endwhile; // End of the loop. ?>

<?php get_template_part( 'template-parts/section', 'clients-slider-static' ); ?>

	<!--HARDCODED PAGE CONTENT BEGIN HERE-->
	<section class="text-section page-content-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<?php gravity_form('Deal Registration', false, false, false, null, false, 10); ?>
				</div>
			</div>
		</div>
	</section>
	<!--HARDCODED PAGE CONTENT END HERE-->

<?php get_footer(); ?>