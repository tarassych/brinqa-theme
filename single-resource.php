<?php
$current_resource_id = get_the_ID();
$is_resource_gated = intval(get_post_meta($current_resource_id, 'wpcf-resource-is-gated', true));

if ( $is_resource_gated == 1 )
{
	include "page-gated-resource.php";
}
else
{
	include "page-ungated-resource.php";
}

?>