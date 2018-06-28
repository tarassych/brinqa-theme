<?php get_header(); ?>

	<section class="static-no-slider text-section">
		<div class="container">
			<div class="col-md-7 col-sm-8 col-xs-12 no-x-padding">
				<h1 class="no-y-margin"><?php the_title()?></h1>
			</div>
		</div>
	</section>
	<section class="blog-full-post text-section">
		<div class="container">
			<div class="content-area">
					<?php
					// Start the loop.
					while ( have_posts() ) : the_post();

						?>
						<article id="post-<?php the_ID(); ?>">
							<?php the_content();?>
						</article>
						<?php

						// Previous/next post navigation.
						the_post_navigation( array(
							'screen_reader_text' => ' ',
							'next_text' => '<span class="meta-nav" aria-hidden="true">Later Post</span> ' .
								'<span class="post-title">'.__('&raquo;').'</span>',
							'prev_text' => '<span class="post-title">'.__('&laquo;').'</span>'.
								'<span class="meta-nav" aria-hidden="true">Earlier Post</span> '
						) );

						// End the loop.
					endwhile;
					?>
			</div><!-- .content-area -->
			<div class="blog-bottom-bar">
				<?php get_template_part( 'template-parts/section', 'stay-updated' ); ?>
			</div>
		</div>
	</section>

<?php get_footer(); ?>