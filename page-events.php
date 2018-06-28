<?php /* Template Name: Events*/ ?>
<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

	<?php get_template_part( 'template-parts/section', 'heading-on-green-bg' ); ?>

<?php endwhile; // End of the loop. ?>

<section class="text-section events-section">
	<div class="container">
		<div class="row text-center">
			<h3 class="event-date-label brinqa-btn"><?php echo date('F Y');?></h3>
		</div>
		<?php echo do_shortcode('[ajax_load_more post_type="event" scroll="false" transition_container="false" button_label="Show More" button_loading_label="Loading Events..." meta_key="wpcf-event-date" meta_value="'.current_time( 'timestamp' ).'" meta_compare=">" meta_type="NUMERIC" order="ASC" orderby="meta_value_num" ]');?>
	</div>
	
</section>

<?php get_footer(); ?>
