<?php /* Template Name: Gated Resource Form Submitted*/ ?>
<?php
$slug = (isset($_REQUEST['rslug'])) ? trim($_REQUEST['rslug']) : false;

if ( $slug )
{
	wp_redirect('/gresource/'.$slug);
}
else
{
	wp_redirect(home_url());
}
exit();
?>