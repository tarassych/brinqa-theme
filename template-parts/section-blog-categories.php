<ul class="blog-categories hidden-sm-down">
	<?php wp_list_categories( array(
		'show_count' => true,
		'orderby' => 'name',
		'title_li' => '<h2 class="smaller-font">Categories</h2>'
	) ); ?>
</ul>