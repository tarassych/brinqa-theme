<?php /* Template Name: Landing Page*/ ?>
<?php get_header();?>

<?php while ( have_posts() ) : the_post(); ?>

	<section class="text-section page-content-section landing-section" style="padding-top:0px">
		<div class="container">
			<?php echo the_content();?>
		</div>
	</section>

<?php endwhile; // End of the loop. ?>

<?php get_footer(); ?>