<?php /* Template Name: Resources Page*/ ?>
<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>

	<?php get_template_part( 'template-parts/section', 'heading-on-green-bg' ); ?>

<?php endwhile; // End of the loop. ?>

<?php
// get list of resources categories
$args = array(
	'taxonomy'      => 'resource-category',
	'parent'        => 0, // get top level categories
	'orderby'       => 'name',
	'order'         => 'ASC',
	'hierarchical'  => 0,
	'pad_counts'    => 0
);

$categories = get_categories( $args );
set_query_var('categories', $categories);
set_query_var('all_btn_caption', 'All Resources');
?>



<?php get_template_part( 'template-parts/section', 'resources-nav' ); ?>

<section class="text-section greyed">
	<div class="container no-x-padding">
		<?php
		$args = array( 'posts_per_page' => -1, 'post_type' => 'resource' );
		$resources = get_posts( $args );
		if ( sizeof($resources) > 0 )
		{
			foreach( $resources as $one_resource )
			{
				set_query_var('one_resource', $one_resource);
				get_template_part( 'template-parts/element', 'resource-post' );
			}
		}
		?>
	</div>
</section>

<?php get_footer(); ?>
