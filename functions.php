<?php
require_once('inc/GWEmailDomainValidator.php'); // Gravity Email Domain Validator
require_once('inc/wp_bootstrap_navwalker.php'); // bootstrap top menu display

// hide wp admin bar
show_admin_bar(false);


// remove wp default emoji
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
// remove dns-prefetch
remove_action( 'wp_head', 'wp_resource_hints', 2 );

// add brinqa scripts and styles
add_action('wp_enqueue_scripts', 'brinqa_scripts_and_styles');

// replace default read more with a button
add_filter( 'excerpt_more', 'brinqa_excerpt_more' );
add_filter( 'the_excerpt', 'brinqa_the_excerpt' );
add_filter( 'document_title_parts', 'brinqa_title_format');
add_filter( 'document_title_separator', 'brinqa_title_separator');

// hide gravity form labels
add_filter( 'gform_enable_field_label_visibility_settings', '__return_true' );

// setup theme
add_action( 'after_setup_theme', 'brinqa_setup' );

add_filter( 'query_vars', 'add_query_vars_filter' );
add_action( 'init', 'gated_resources_permastruct_rewrite' );

//add_action( 'widgets_init', 'brinqa_widgets_init' );
//
//function brinqa_widgets_init() {
//	register_sidebar( array(
//		'name' => __( 'Twitter Area', 'brinqa' ),
//		'id' => 'twitter-area-1',
//		'description' => __( 'The twitter area container', 'brinqa' ),
//		'before_widget' => '<li id="%1$s" class="widget %2$s">',
//		'after_widget'  => '</li>',
//		'before_title'  => '<h2 class="widgettitle">',
//		'after_title'   => '</h2>',
//	) );
//}

function add_query_vars_filter( $vars )
{
	$vars[] = "gated_slug";
	return $vars;
}

function gated_resources_permastruct_rewrite()
{
	global $wp_rewrite;

	$wp_rewrite->add_rewrite_tag("%gated_slug%", '([^/]+)', "?pagename=gated-resource-unlocked&gated_slug=");
	$wp_rewrite->add_permastruct('gated_resource', '/gresource/%gated_slug%', false);
}

function brinqa_scripts_and_styles()
{
	if (!is_admin()) {
		// comment out the next two lines to load the local copy of jQuery
		wp_deregister_script('jquery');
		wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js', false, null);
		wp_enqueue_script('jquery');
	}

	// css
//	wp_enqueue_style('brinqa-fonts', 'https://fonts.googleapis.com/css?family=Roboto:300,400,700', array(), '1.0' );
	wp_enqueue_style('brinqa-owl-carousel', get_theme_file_uri( '/assets/css/owl.carousel.min.css' ), array(), '2.2.1' );
	wp_enqueue_style('brinqa-wow-animate', get_theme_file_uri( '/assets/css/wow-animate.css' ), array(), '3.5.2' );
//	wp_enqueue_style('brinqa-main', get_theme_file_uri( '/assets/css/main.min.css' ), array('brinqa-owl-carousel','brinqa-wow-animate'), '1.0' );
	wp_enqueue_style('brinqa-main', get_theme_file_uri( '/assets/css/main.css' ), array('brinqa-owl-carousel','brinqa-wow-animate'), '1.0' );
	wp_enqueue_style('brinqa-theme', get_stylesheet_uri(), array('brinqa-main'), '1.0' );

	// js in header
	wp_enqueue_script( 'bootstrap-html4shiv', 'https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js', array(), null, false );
	wp_enqueue_script( 'bootstrap-respond', 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js', array(), null, false );
	wp_enqueue_script('jquery');
	wp_enqueue_script( 'brinqa-jquery', 'https://code.jquery.com/jquery-2.1.4.min.js', false, null);

	// js in footer
	wp_enqueue_script( 'brinqa-flip', 'https://cdn.rawgit.com/nnattawat/flip/master/dist/jquery.flip.min.js', false, null);
	wp_enqueue_script( 'brinqa-owl-carousel', get_theme_file_uri( '/assets/js/owl.carousel.min.js' ), array('jquery'), '2.2.1', true);
	wp_enqueue_script( 'brinqa-wow-animate', get_theme_file_uri( '/assets/js/wow.min.js' ), array('jquery'), '1.1.3', true);
	//wp_enqueue_script( 'brinqa-theme-scripts', get_theme_file_uri( '/assets/js/theme.min.js' ), array('jquery'), '1.0', true);
	wp_enqueue_script( 'brinqa-theme-scripts', get_theme_file_uri( '/assets/js/theme.js' ), array('jquery'), '1.0', true);
}

function brinqa_setup()
{
	// let WP manage title tag
	add_theme_support( 'title-tag' );

	// header and footer menus
	register_nav_menus( array(
		'header-nav'    => __( 'Header Nav Menu', 'brinqa' ),
		'footer-nav-about' => __( 'Footer Nav About', 'brinqa' ),
		'footer-nav-products' => __( 'Footer Nav Products', 'brinqa' ),
		'footer-nav-resources' => __( 'Footer Nav Resources', 'brinqa' ),
		'footer-nav-getintouch' => __( 'Footer Nav Get In Touch', 'brinqa' ),
	) );
}

function brinqa_the_excerpt( $output )
{
	global $post;

	return $output . sprintf( '<div class="row"><div class="col-md-12"><a class="brinqa-btn filled-green-btn read-more" href="%1$s" title="%3$s">%2$s</a></div></div>',
		get_permalink( get_the_ID() ),
		__( 'View', 'brinqa' ),
		get_the_title(get_the_ID())
	);
}

function brinqa_title_format( $title ) {
	$new_title = array('title' => $title['site'], 'site' => $title['title']);
	return $new_title;
};

function brinqa_title_separator( $separator )
{
	return ':';
}

function brinqa_excerpt_more( $more )
{
//	return sprintf( '<div class="row"><div class="col-md-12"><a class="brinqa-btn filled-green-btn read-more" href="%1$s" title="%3$s">%2$s</a></div></div>',
//		get_permalink( get_the_ID() ),
//		__( 'Read More', 'brinqa' ),
//		get_the_title(get_the_ID())
//	);
	return '';
}

function brinqa_blog_pagination($numpages = '', $pagerange = '', $paged='')
{
	global $paged;

	if (empty($pagerange)) $pagerange = 2;
	if (empty($paged))	$paged = 1;
	if ($numpages == '')
	{
		global $wp_query;
		$numpages = $wp_query->max_num_pages;
		if(!$numpages) $numpages = 1;
	}

	/**
	 * We construct the pagination arguments to enter into our paginate_links
	 * function.
	 */
	$pagination_args = array(
		'base'            => get_pagenum_link(1) . '%_%',
		'format'          => 'page/%#%',
		'total'           => $numpages,
		'current'         => $paged,
		'show_all'        => False,
		'end_size'        => 1,
		'mid_size'        => $pagerange,
		'prev_next'       => True,
		'prev_text'       => __('&laquo;'),
		'next_text'       => __('&raquo;'),
		'type'            => 'plain',
		'add_args'        => false,
		'add_fragment'    => ''
	);
	$paginate_links = paginate_links($pagination_args);

	if ($paginate_links)
	{
		echo "<nav class='brinqa-pagination text-center'>";
		echo str_replace(array("\n\r", "\n", "\r"), '', $paginate_links);
		echo "</nav>";
	}

}


//class GWEmailDomainControl extends GW_Email_Domain_Validator { }

# Configuration

////////////////Gated Content Form
new GW_Email_Domain_Validator( array(
    'form_id' => 8,
    'field_id' => 3,
    'domains' => array( 'gmail.com' ,'yahoo.com' ,'hotmail.com' ,
					   'aol.com' ,'hotmail.co.uk' ,'hotmail.fr' ,
					   'msn.com' ,'yahoo.fr' ,'wanadoo.fr' ,'orange.fr' ,
					   'comcast.net' ,'yahoo.co.uk' ,'yahoo.com.br' ,
					   'yahoo.co.in' ,'live.com' ,'rediffmail.com' ,
					   'free.fr' ,'gmx.de' ,'web.de' ,'yandex.ru' ,
					   'ymail.com' ,'outlook.com' ,'mail.ru' ,'cox.net' ,
					   'hotmail.it' ,'att.net' ,'laposte.net' ,'facebook.com' ,
					   'bellsouth.net' ,'yahoo.in' ,'rambler.ru' ,'mail.com' ,
					   'planet.nl', 'na.na' ),
    'validation_message' => __( 'Oh no! <strong>%s</strong> email accounts are not eligible for this form.' ),
    'mode' => 'ban' // use 'limit' to accept the array and 'ban' to deny the array
) );

//////////////Pricing Form
new GW_Email_Domain_Validator( array(
    'form_id' => 6,
    'field_id' => 3,
    'domains' => array( 'gmail.com' ,'yahoo.com' ,'hotmail.com' ,
					   'aol.com' ,'hotmail.co.uk' ,'hotmail.fr' ,
					   'msn.com' ,'yahoo.fr' ,'wanadoo.fr' ,'orange.fr' ,
					   'comcast.net' ,'yahoo.co.uk' ,'yahoo.com.br' ,
					   'yahoo.co.in' ,'live.com' ,'rediffmail.com' ,
					   'free.fr' ,'gmx.de' ,'web.de' ,'yandex.ru' ,
					   'ymail.com' ,'outlook.com' ,'mail.ru' ,'cox.net' ,
					   'hotmail.it' ,'att.net' ,'laposte.net' ,'facebook.com' ,
					   'bellsouth.net' ,'yahoo.in' ,'rambler.ru' ,'mail.com' ,
					   'planet.nl', 'na.na' ),
    'validation_message' => __( 'Oh no! <strong>%s</strong> email accounts are not eligible for this form.' ),
    'mode' => 'ban' // use 'limit' to accept the array and 'ban' to deny the array
) );

/////////// Free trial form
new GW_Email_Domain_Validator( array(
    'form_id' => 5,
    'field_id' => 3,
    'domains' => array( 'gmail.com' ,'yahoo.com' ,'hotmail.com' ,
					   'aol.com' ,'hotmail.co.uk' ,'hotmail.fr' ,
					   'msn.com' ,'yahoo.fr' ,'wanadoo.fr' ,'orange.fr' ,
					   'comcast.net' ,'yahoo.co.uk' ,'yahoo.com.br' ,
					   'yahoo.co.in' ,'live.com' ,'rediffmail.com' ,
					   'free.fr' ,'gmx.de' ,'web.de' ,'yandex.ru' ,
					   'ymail.com' ,'outlook.com' ,'mail.ru' ,'cox.net' ,
					   'hotmail.it' ,'att.net' ,'laposte.net' ,'facebook.com' ,
					   'bellsouth.net' ,'yahoo.in' ,'rambler.ru' ,'mail.com' ,
					   'planet.nl', 'na.na' ),
    'validation_message' => __( 'Oh no! <strong>%s</strong> email accounts are not eligible for this form.' ),
    'mode' => 'ban' // use 'limit' to accept the array and 'ban' to deny the array
) );

/////////// Demo Request form
new GW_Email_Domain_Validator( array(
    'form_id' => 9,
    'field_id' => 3,
    'domains' => array( 'gmail.com' ,'yahoo.com' ,'hotmail.com' ,
					   'aol.com' ,'hotmail.co.uk' ,'hotmail.fr' ,
					   'msn.com' ,'yahoo.fr' ,'wanadoo.fr' ,'orange.fr' ,
					   'comcast.net' ,'yahoo.co.uk' ,'yahoo.com.br' ,
					   'yahoo.co.in' ,'live.com' ,'rediffmail.com' ,
					   'free.fr' ,'gmx.de' ,'web.de' ,'yandex.ru' ,
					   'ymail.com' ,'outlook.com' ,'mail.ru' ,'cox.net' ,
					   'hotmail.it' ,'att.net' ,'laposte.net' ,'facebook.com' ,
					   'bellsouth.net' ,'yahoo.in' ,'rambler.ru' ,'mail.com' ,
					   'planet.nl', 'na.na' ),
    'validation_message' => __( 'Oh no! <strong>%s</strong> email accounts are not eligible for this form.' ),
    'mode' => 'ban' // use 'limit' to accept the array and 'ban' to deny the array
) );


/////////// Deal Registration Form
new GW_Email_Domain_Validator( array(
    'form_id' => 4,
    'field_id' => 14,
    'domains' => array( 'gmail.com' ,'yahoo.com' ,'hotmail.com' ,
					   'aol.com' ,'hotmail.co.uk' ,'hotmail.fr' ,
					   'msn.com' ,'yahoo.fr' ,'wanadoo.fr' ,'orange.fr' ,
					   'comcast.net' ,'yahoo.co.uk' ,'yahoo.com.br' ,
					   'yahoo.co.in' ,'live.com' ,'rediffmail.com' ,
					   'free.fr' ,'gmx.de' ,'web.de' ,'yandex.ru' ,
					   'ymail.com' ,'outlook.com' ,'mail.ru' ,'cox.net' ,
					   'hotmail.it' ,'att.net' ,'laposte.net' ,'facebook.com' ,
					   'bellsouth.net' ,'yahoo.in' ,'rambler.ru' ,'mail.com' ,
					   'planet.nl', 'na.na' ),
    'validation_message' => __( 'Oh no! <strong>%s</strong> email accounts are not eligible for this form.' ),
    'mode' => 'ban' // use 'limit' to accept the array and 'ban' to deny the array
) );

/////////// Customer Support Form
new GW_Email_Domain_Validator( array(
    'form_id' => 10,
    'field_id' => 3,
    'domains' => array( 'gmail.com' ,'yahoo.com' ,'hotmail.com' ,
					   'aol.com' ,'hotmail.co.uk' ,'hotmail.fr' ,
					   'msn.com' ,'yahoo.fr' ,'wanadoo.fr' ,'orange.fr' ,
					   'comcast.net' ,'yahoo.co.uk' ,'yahoo.com.br' ,
					   'yahoo.co.in' ,'live.com' ,'rediffmail.com' ,
					   'free.fr' ,'gmx.de' ,'web.de' ,'yandex.ru' ,
					   'ymail.com' ,'outlook.com' ,'mail.ru' ,'cox.net' ,
					   'hotmail.it' ,'att.net' ,'laposte.net' ,'facebook.com' ,
					   'bellsouth.net' ,'yahoo.in' ,'rambler.ru' ,'mail.com' ,
					   'planet.nl', 'na.na' ),
    'validation_message' => __( 'Oh no! <strong>%s</strong> email accounts are not eligible for this form.' ),
    'mode' => 'ban' // use 'limit' to accept the array and 'ban' to deny the array
) );

/////////// Contact Us Page form
new GW_Email_Domain_Validator( array(
    'form_id' => 3,
    'field_id' => 4,
    'domains' => array( 'gmail.com' ,'yahoo.com' ,'hotmail.com' ,
					   'aol.com' ,'hotmail.co.uk' ,'hotmail.fr' ,
					   'msn.com' ,'yahoo.fr' ,'wanadoo.fr' ,'orange.fr' ,
					   'comcast.net' ,'yahoo.co.uk' ,'yahoo.com.br' ,
					   'yahoo.co.in' ,'live.com' ,'rediffmail.com' ,
					   'free.fr' ,'gmx.de' ,'web.de' ,'yandex.ru' ,
					   'ymail.com' ,'outlook.com' ,'mail.ru' ,'cox.net' ,
					   'hotmail.it' ,'att.net' ,'laposte.net' ,'facebook.com' ,
					   'bellsouth.net' ,'yahoo.in' ,'rambler.ru' ,'mail.com' ,
					   'planet.nl', 'na.na' ),
    'validation_message' => __( 'Oh no! <strong>%s</strong> email accounts are not eligible for this form.' ),
    'mode' => 'ban' // use 'limit' to accept the array and 'ban' to deny the array
) );

/////////// Contact Us Footer form
new GW_Email_Domain_Validator( array(
    'form_id' => 1,
    'field_id' => 4,
    'domains' => array( 'gmail.com' ,'yahoo.com' ,'hotmail.com' ,
					   'aol.com' ,'hotmail.co.uk' ,'hotmail.fr' ,
					   'msn.com' ,'yahoo.fr' ,'wanadoo.fr' ,'orange.fr' ,
					   'comcast.net' ,'yahoo.co.uk' ,'yahoo.com.br' ,
					   'yahoo.co.in' ,'live.com' ,'rediffmail.com' ,
					   'free.fr' ,'gmx.de' ,'web.de' ,'yandex.ru' ,
					   'ymail.com' ,'outlook.com' ,'mail.ru' ,'cox.net' ,
					   'hotmail.it' ,'att.net' ,'laposte.net' ,'facebook.com' ,
					   'bellsouth.net' ,'yahoo.in' ,'rambler.ru' ,'mail.com' ,
					   'planet.nl', 'na.na' ),
    'validation_message' => __( 'Oh no! <strong>%s</strong> email accounts are not eligible for this form.' ),
    'mode' => 'ban' // use 'limit' to accept the array and 'ban' to deny the array
) );


?>
