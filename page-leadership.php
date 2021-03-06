<?php /* Template Name: Leadership Page*/ ?>
<?php get_header();?>

<?php while ( have_posts() ) : the_post(); ?>

	<?php get_template_part( 'template-parts/section', 'heading-on-computer-bg' ); ?>

	<section class="text-section page-content-section">
		<div class="container">
			<?php echo the_content();?>
		</div>
	</section>

<?php endwhile; // End of the loop. ?>

<?php get_footer(); ?>
