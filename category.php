<?php
/* Template Name: Blog*/
get_header();

// get current category data
$category = get_the_category();
$category_slug = $category[0]->slug;
$category_id = $category[0]->cat_ID;
?>

<section class="static-no-bg greyed-no-border no-bottom-padding text-section">
	<div class="container">
		<div class="col-md-7 col-sm-8 col-xs-12 no-x-padding">
			<h1 class="wow fadeInRight" data-wow-duration="0.5s"><?php single_cat_title();?></h1>
			<h3 class="wow fadeInRight" data-wow-duration="0.5s""><?php echo category_description( $category_id )?></h3>
		</div>
	</div>
</section>

<section class="blog text-section">
	<div class="container">
		<?php get_template_part( 'template-parts/section', 'blog-categories-mobile' ); ?>
		
		<div class="blog-posts no-left-padding col-md-8 col-sm-12 col-xs-12">
			<?php
			// the query
			$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

			$args = array('post_type' => 'post', 'category_name' => $category_slug, 'posts_per_page' => 10, 'paged' => $paged);
			$the_query = new WP_Query( $args ); ?>

			<?php if ( $the_query->have_posts() ) : ?>

				<div class="posts-container">
					<!-- the loop -->
					<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						<?php get_template_part( 'template-parts/element', 'blog-post' ); ?>
					<?php endwhile; ?>
					<!-- end of the loop -->
				</div>

				<!-- pagination here -->
				<?php
				if ( function_exists('brinqa_blog_pagination') )
				{
					brinqa_blog_pagination($the_query->max_num_pages, "", $paged);
				}
				?>

				<?php wp_reset_postdata(); ?>

			<?php else:  ?>
				<h2>Sorry...</h2>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
		</div>
		<div class="blog-sidebar no-right-padding col-md-3 col-sm-12 col-xs-12">
			<?php get_template_part( 'template-parts/section', 'blog-categories' ); ?>

			<?php get_template_part( 'template-parts/section', 'stay-updated' ); ?>
		</div>
	</div>
</section>


<?php get_footer(); ?>
