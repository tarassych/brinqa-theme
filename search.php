<?php
/*
Template Name: Search Page
*/

$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
?>
<?php get_header(); ?>

	<section class="static-no-bg greyed-no-border no-bottom-padding text-section">
		<div class="container">
			<div class="col-md-12 col-sm-12 col-xs-12 no-x-padding">
				<?php if ( have_posts() ) : ?>
					<h1 class="wow fadeInRight" data-wow-duration="0.5s"><?php printf( __( 'Search Results for: "%s"', 'brinqa' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				<?php else : ?>
					<h1 class="wow fadeInRight" data-wow-duration="0.5s"><?php _e( 'Nothing Found', 'brinqa' ); ?></h1>
				<?php endif; ?>
			</div>
		</div>
	</section>

	<section class="text-section page-content-section resource-page">
		<div class="container">
			<div class="blog-posts no-left-padding col-md-12 col-sm-12 col-xs-12">
				<?php
				// the query
				$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

				$args = array('post_type' => 'post', 'posts_per_page' => 10, 'paged' => $paged);
				$the_query = new WP_Query( $args ); ?>

				<?php
				if ( have_posts() ) :
					?><div class="posts-container"><?php
					while ( have_posts() ) : the_post();
						get_template_part( 'template-parts/element', 'blog-post' );
					endwhile;
					?></div><?php

					?>
					<!-- pagination here -->
					<?php
//					if ( function_exists('brinqa_blog_pagination') )
//					{
//						brinqa_blog_pagination($GLOBALS['wp_query']->max_num_pages, "", $paged);
//					}
					?>

					<?php wp_reset_postdata(); ?>
					<?php
				else :
					?><h3><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'twentyseventeen' ); ?></h3>
					<form role="search" method="get" id="pagesearchform" class="page-form searchform" action="/">
						<div>
							<label class="screen-reader-text" for="s">Search for:</label>
							<input value="sadfasdfasdfgsdf" name="s" id="s" type="text">
							<br><br>
							<input id="searchsubmit" value="Search" type="submit" class="brinqa-btn pull-left filled-green-btn">
						</div>
					</form>
					<?php
				endif;
				?>
			</div>
		</div>
	</section>


<?php get_footer();
