<?php /* Template Name: Thank You Page*/ ?>
<?php
$resource_slug = get_query_var('gated_slug');
$resource_post = false;

if ( $resource_slug && $resource_slug != '' )
{
	$args = array(
		'name'        => $resource_slug,
		'post_type'   => 'resource',
		'post_status' => 'publish',
		'numberposts' => 1
	);
	$found_resources = get_posts($args);
    if ( sizeof($found_resources) == 1 )
    {
        $resource_post = $found_resources[0];
    }
    else
    {
		wp_redirect(home_url());
		exit();
    }
}
else
{
	wp_redirect(home_url());
	exit();
}


?>
<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

	<section class="static-no-slider green-logos-bg text-section">
		<div class="container">
			<div class="col-md-7 col-sm-8 col-xs-12 no-x-padding">
				<h1 class="underlined-heading white-underlined wow fadeInRight" data-wow-duration="0.5s">Thank you</h1>
				<h3 class=" wow fadeInRight" data-wow-duration="0.5s"><?php the_secondary_title(); ?> "<?php echo $resource_post->post_title?>"</h3>
			</div>
		</div>
	</section>

<?php endwhile; // End of the loop. ?>

<section class="text-section greyed-no-border page-content-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<?php the_content();?>
			</div>
		</div>
		<?php
		if ( $resource_post )
		{
			$resource_type = get_post_meta($resource_post->ID, 'wpcf-resource-type', true);
			if ( $resource_type == 'video' )
			{
				?>
				<!--VIDEO MODAL WINDOW-->
				<div id="video-modal" class="modal fade" role="dialog">
					<div class="modal-dialog">
						<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title"><?php echo $resource_post->post_title;?></h4>
							</div>
							<div class="modal-body">
								<iframe src="<?php echo get_post_meta($resource_post->ID, 'wpcf-resource-attached-video', true)?>?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
							</div>
						</div>
					</div>
				</div>
				<?php
			}


			$is_gated = get_post_meta($resource_post->ID, 'wpcf-resource-is-gated', true);
			if ( $is_gated == 1 )
			{
				?>
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12 text-center">
						<?php
						if ( $resource_type == 'video' )
						{
							?>
                            <a href="#" data-toggle="modal" data-target="#video-modal"><img class="alignleft resource-page-image" src="<?php echo get_post_meta($resource_post->ID, 'wpcf-resource-page-image', true)?>"/></a>
							<?php
						}
						else
						{
							?><a href="<?php echo get_post_meta($resource_post->ID, 'wpcf-resource-attached-document', true)?>" target="_blank"><img class="alignleft resource-page-image" src="<?php echo get_post_meta($resource_post->ID, 'wpcf-resource-page-image', true)?>"/></a><?php
						}
						?>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <h2 id="resource-title"><?php echo $resource_post->ID->post_title?></h2>
						<?php echo $resource->post_content;?>
                    </div>
                </div>

				<br>
				<br>
				<br>
				<?php
			}
		}
		?>
		<div class="row">
			<div class="col-md-4 col-sm-4 col-xs-10 col-md-offset-0 col-sm-offset-0 col-xs-offset-1 text-center">
				<div class="square-box green-box request-a-demo-box">
					<img src="/wp-content/uploads/2017/12/icon.png" alt="Request a Demo" title="Request a Demo">
					<h2>Request Demo</h2>
					<br>
					<p>Watch the Brinqa Risk Platform in action.</p>
					<p><br><br><a href="/demo-request/">Request</a></p>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-10 col-md-offset-0 col-sm-offset-0 col-xs-offset-1 text-center">
				<div class="square-box blue-box sales-inquiry-box">
					<img src="<?php echo get_template_directory_uri();?>/assets/img/sales-inquiry.png" alt="Sales Inquiry" title="Sales Inquiry">
					<h2>Sales Inquiry</h2>
					<br>
					<p>Have questions about product features, pricing, etc.? </p>
					<p><br><br><a href="/pricing">Contact Sales</a></p>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-10 col-md-offset-0 col-sm-offset-0 col-xs-offset-1 text-center">
				<div class="square-box grey-box customer-support-box">
					<img src="<?php echo get_template_directory_uri();?>/assets/img/customer-support.png" alt="Customer Support" title="Customer Support">
					<h2>Customer Support</h2>
					<p>Need help with a Brinqa product?</p>
					<p><br><br><a href="https://brinqa.atlassian.net/servicedesk">Contact Support</a></p>
				</div>
			</div>
		</div>

	</div>
</section>

<?php get_footer(); ?>

