<article class="blog-post">
	<h3 class="bigger"><?php the_title(); ?></h3>
	<p class="post-date-author"><?php the_date();?> <strong>by <?php the_author()?></strong></p>
	<div class="content">
		<?php the_excerpt(); ?>
	</div>
</article>