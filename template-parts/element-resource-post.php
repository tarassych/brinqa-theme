<?php
$categories = wp_get_post_terms($one_resource->ID, 'resource-category');
$all_categories_slug = array();

$resource_first_category = false;

if ( sizeof($categories) > 0 )
{

	foreach ($categories as $one_cat)
	{
		if ( !$resource_first_category )
		{
			$resource_first_category = $one_cat;
		}
		$all_categories_slug[] = 'cat-'.$one_cat->slug;
	}
}

?>

<div class="<?php echo implode(' ', $all_categories_slug);?> hidden-by-default cat-element col-md-4 col-sm-4 col-xs-6 wowResource fadeInUp" data-wow-delay="0.3s" >
	<div class="square-grid-element">
		<a href="<?php echo get_post_permalink($one_resource->ID);?>">
			<div class="square-element-img">
				<img class="img-responsive center-block" src="<?php echo get_post_meta($one_resource->ID, 'wpcf-resource-image', true);?>">
			</div>
			<div class="square-element-dec">
				<h3><?php echo $one_resource->post_title?></h3>
				<span class="category-name"><?php echo $resource_first_category->name?></span>
			</div>
		</a>
	</div>
</div>