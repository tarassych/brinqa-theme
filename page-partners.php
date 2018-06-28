<?php /* Template Name: Partners Page*/ ?>
<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>

	<?php get_template_part( 'template-parts/section', 'heading-on-green-bg' ); ?>

<?php endwhile; // End of the loop. ?>

<?php
// get list of resources categories
$args = array(
	'taxonomy'      => 'partner-category',
	'parent'        => 0, // get top level categories
	'orderby'       => 'name',
	'order'         => 'ASC',
	'hierarchical'  => 0,
	'pad_counts'    => 0
);

$categories = get_categories( $args );
set_query_var('categories', $categories);
set_query_var('all_btn_caption', 'All Partners');
?>

<?php get_template_part( 'template-parts/section', 'resources-nav' ); ?>

<section class="text-section greyed">
	<div class="container no-x-padding">
		<?php
		$args = array( 'posts_per_page' => -1, 'post_type' => 'partner', 'orderby'=> 'title', 'order' => 'ASC');
		$partners = get_posts( $args );
		if ( sizeof($partners) > 0 )
		{
			foreach( $partners as $one_partner )
			{
				set_query_var('one_partner', $one_partner);
				get_template_part( 'template-parts/element', 'partner-post' );
			}
		}
		?>
	</div>
</section>

<?php get_footer(); ?>
