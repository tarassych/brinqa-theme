<?php /* Template Name: Ungated Resource Page*/ ?>
<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>

	<?php get_template_part( 'template-parts/section', 'heading-on-green-bg' ); ?>

	<section class="text-section page-content-section resource-page">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-12 text-center">
					<?php
					$resource_type = get_post_meta($current_resource_id, 'wpcf-resource-type', true);
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
                                        <h4 class="modal-title"><?php the_title();?></h4>
                                    </div>
                                    <div class="modal-body">
                                        <iframe  src="<?php echo get_post_meta($current_resource_id, 'wpcf-resource-attached-video', true)?>?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="#" data-toggle="modal" data-target="#video-modal"><img class="alignleft resource-page-image" src="<?php echo get_post_meta($current_resource_id, 'wpcf-resource-page-image', true)?>"/></a>
						<?php
					}
					else
					{
						?><a href="<?php echo get_post_meta($current_resource_id, 'wpcf-resource-attached-document', true)?>" target="_blank"><img class="alignleft resource-page-image" src="<?php echo get_post_meta($current_resource_id, 'wpcf-resource-page-image', true)?>"/></a><?php
					}
					?>
				</div>
                <div class="col-md-6 col-sm-6 col-xs-12">
					<?php the_content();?>
                </div>
			</div>

		</div>
	</section>


<?php endwhile; // End of the loop. ?>


<?php get_footer(); ?>
