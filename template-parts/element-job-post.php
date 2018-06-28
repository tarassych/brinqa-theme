<div class="one-job text-section">
	<div class="container">
		<h2><?php echo $one_job->post_title?></h2>
		<h3><?php echo $one_job->post_content?></h3>
		<br>
		<a href="#" class="brinqa-btn filled-green-btn job-read-more-btn">Read More</a>
		<div class="hidden-job-content">
			<?php echo get_post_meta($one_job->ID, 'wpcf-read-more-about-job', true);?>
			<br>
			<a href="mailto: <?php echo get_post_meta($one_job->ID, 'wpcf-apply-button-email', true);?>" class="brinqa-btn empty-green-btn">Apply</a>
		</div>
	</div>
</div>



