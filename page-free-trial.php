<?php /* Template Name: Free Trial Page*/ ?>
<?php get_header();?>

<?php while ( have_posts() ) : the_post(); ?>

	<?php get_template_part( 'template-parts/section', 'heading-on-computer-bg' ); ?>


	<?php get_template_part( 'template-parts/section', 'clients-slider-static' ); ?>

	<section class="text-section page-content-section">
		<div class="container">
			<?php echo the_content();?>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<?php gravity_form('Free Trial', false, false, false, null, false, 10); ?>
				</div>
			</div>
		</div>
	</section>
<?php endwhile; // End of the loop. ?>
<?php get_footer(); ?>