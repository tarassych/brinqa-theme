<?php /* Template Name: Blog*/ ?>
<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

	<?php get_template_part( 'template-parts/section', 'heading-on-grey-bg' ); ?>

<?php endwhile; // End of the loop. ?>

<section class="blog text-section">
	<div class="container">
		<?php get_template_part( 'template-parts/section', 'blog-categories-mobile' ); ?>

		<div class="blog-posts no-left-padding col-md-8 col-sm-12 col-xs-12">
			<?php
			// the query
			$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

			$args = array('post_type' => 'post', 'posts_per_page' => 10, 'paged' => $paged);
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
