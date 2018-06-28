<?php
$categories = wp_get_post_terms($one_partner->ID, 'partner-category');
$all_categories_slug = array();

if ( sizeof($categories) > 0 )
{
	foreach ($categories as $one_cat)
	{
		$all_categories_slug[] = 'cat-'.$one_cat->slug;
	}
}

?>

<div class="<?php echo implode(' ', $all_categories_slug);?> hidden-by-default cat-element col-md-3 col-sm-3 col-xs-6 wowResource fadeInUp" data-wow-delay="0.3s" >
    <div class="connector-grid-element">
        <div class="connector-element-img" style="background-image: url('<?php echo get_post_meta($one_partner->ID, 'wpcf-partner-logo', true);?>')">
            <a href="<?php echo get_post_meta($one_partner->ID, 'wpcf-partner-read-more-url', true);?>" title="<?php echo $one_partner->post_title?>"></a>
        </div>
    </div>
</div>