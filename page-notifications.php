<?php /* Template Name: Notifications Page*/ ?>
<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>

	<?php get_template_part( 'template-parts/section', 'heading-on-computer-bg' ); ?>

<?php endwhile; // End of the loop. ?>

	<!--HARDCODED PAGE CONTENT BEGIN HERE-->
	<section class="text-section white-logos-bg bordered-section">
		<div class="container">
			<div class="col-md-6 col-sm-6 col-xs-12 additional-y-spacing wow fadeInUp">
				<h2 class="underlined-heading blue-underlined">Reports and Dashboard</h2>
				<p>Desktop publishing search packages and web packages page editors use Lorem as their web page editors use Loerm their default publishing search packages</p>
				<br>
				<a href="#" class="brinqa-btn filled-blue-btn" >Learn More</a>
			</div>
		</div>
		<div class="static-content-image">
			<img class="wow bounceInRight" src="<?php echo get_template_directory_uri();?>/assets/img/sceen3.jpg" style="visibility: visible; animation-name: bounceInRight;">
		</div>
	</section>

	<section class="text-section page-content-section bordered-section">
		<div class="container">
			<div class="text-center heading-icon">
				<svg viewBox="0 0 48 48" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
					<!-- Generator: Sketch 45.1 (43504) - http://www.bohemiancoding.com/sketch -->
					<title>puzzle</title>
					<desc>Created with Sketch.</desc>
					<defs></defs>
					<g id="LANDING-PAGE" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						<g id="product" transform="translate(-617.000000, -1955.000000)" fill-rule="nonzero" fill="#578E40">
							<g id="2" transform="translate(317.000000, 1955.000000)">
								<g id="puzzle" transform="translate(300.000000, 0.000000)">
									<path d="M47.2340426,0 L37.1489362,0 C36.7258213,0 36.3829787,0.342842553 36.3829787,0.765957447 C36.3829787,1.18907234 36.7258213,1.53191489 37.1489362,1.53191489 L46.4680851,1.53191489 L46.4680851,23.2340426 L40.8251234,23.2340426 C40.9272511,22.8192 40.9787234,22.3927149 40.9787234,21.9574468 C40.9787234,19.0010553 38.5734128,16.5957447 35.6170213,16.5957447 C32.6606298,16.5957447 30.2553191,19.0010553 30.2553191,21.9574468 C30.2553191,22.3926128 30.3067915,22.8192 30.4089191,23.2340426 L24.7659574,23.2340426 L24.7659574,16.4980085 C24.7659574,16.232783 24.6288,15.9864511 24.4033021,15.8468426 C24.1780085,15.707234 23.8963404,15.6940596 23.6588936,15.8122213 C23.1245617,16.0780596 22.552034,16.212766 21.9574468,16.212766 C19.8456511,16.212766 18.1276596,14.4947745 18.1276596,12.3829787 C18.1276596,10.271183 19.8456511,8.55319149 21.9574468,8.55319149 C22.5522383,8.55319149 23.1246638,8.68789787 23.6587915,8.95373617 C23.8959319,9.07189787 24.1778043,9.05892766 24.4033021,8.91911489 C24.6288,8.77950638 24.7659574,8.53317447 24.7659574,8.26794894 L24.7659574,1.53191489 L34.0851064,1.53191489 C34.5082213,1.53191489 34.8510638,1.18907234 34.8510638,0.765957447 C34.8510638,0.342842553 34.5082213,0 34.0851064,0 L0.765957447,0 C0.342842553,0 0,0.342842553 0,0.765957447 L0,47.2340426 C0,47.6571574 0.342842553,48 0.765957447,48 L47.2340426,48 C47.6571574,48 48,47.6571574 48,47.2340426 L48,0.765957447 C48,0.342842553 47.6571574,0 47.2340426,0 Z M23.2340426,1.53191489 L23.2340426,7.1748766 C22.8192,7.07274894 22.3927149,7.0212766 21.9574468,7.0212766 C19.0010553,7.0212766 16.5957447,9.42658723 16.5957447,12.3829787 C16.5957447,15.3393702 19.0010553,17.7446809 21.9574468,17.7446809 C22.3926128,17.7446809 22.8192,17.6932085 23.2340426,17.5910809 L23.2340426,23.2340426 L16.4980085,23.2340426 C16.232783,23.2340426 15.9864511,23.3712 15.8468426,23.5966979 C15.707234,23.8220936 15.6940596,24.1037617 15.8122213,24.3411064 C16.0780596,24.8754383 16.212766,25.447966 16.212766,26.0425532 C16.212766,28.1543489 14.4947745,29.8723404 12.3829787,29.8723404 C10.271183,29.8723404 8.55319149,28.1543489 8.55319149,26.0425532 C8.55319149,25.4477617 8.68789787,24.8753362 8.95373617,24.3412085 C9.07179574,24.1038638 9.0587234,23.8221957 8.91911489,23.5966979 C8.77950638,23.3712 8.53317447,23.2340426 8.26794894,23.2340426 L1.53191489,23.2340426 L1.53191489,1.53191489 L23.2340426,1.53191489 Z M1.53191489,24.7659574 L7.1748766,24.7659574 C7.07274894,25.1808 7.0212766,25.6072851 7.0212766,26.0425532 C7.0212766,28.9989447 9.42658723,31.4042553 12.3829787,31.4042553 C15.3393702,31.4042553 17.7446809,28.9989447 17.7446809,26.0425532 C17.7446809,25.6073872 17.6932085,25.1808 17.5910809,24.7659574 L23.2340426,24.7659574 L23.2340426,31.5019915 C23.2340426,31.767217 23.3712,32.0135489 23.5966979,32.1531574 C23.8220936,32.2928681 24.1038638,32.3060426 24.3411064,32.1877787 C24.8754383,31.9219404 25.447966,31.787234 26.0425532,31.787234 C28.1543489,31.787234 29.8723404,33.5052255 29.8723404,35.6170213 C29.8723404,37.728817 28.1543489,39.4468085 26.0425532,39.4468085 C25.4477617,39.4468085 24.8753362,39.3121021 24.3412085,39.0462638 C24.103966,38.9281021 23.8222979,38.9411745 23.5966979,39.0808851 C23.3712,39.2204936 23.2340426,39.4668255 23.2340426,39.7320511 L23.2340426,46.4680851 L1.53191489,46.4680851 L1.53191489,24.7659574 L1.53191489,24.7659574 Z M24.7659574,46.4680851 L24.7659574,40.8251234 C25.1808,40.9272511 25.6072851,40.9787234 26.0425532,40.9787234 C28.9989447,40.9787234 31.4042553,38.5734128 31.4042553,35.6170213 C31.4042553,32.6606298 28.9989447,30.2553191 26.0425532,30.2553191 C25.6073872,30.2553191 25.1808,30.3067915 24.7659574,30.4089191 L24.7659574,24.7659574 L31.5019915,24.7659574 C31.767217,24.7659574 32.0135489,24.6288 32.1531574,24.4033021 C32.292766,24.1779064 32.3059404,23.8962383 32.1877787,23.6588936 C31.9219404,23.1245617 31.787234,22.552034 31.787234,21.9574468 C31.787234,19.8456511 33.5052255,18.1276596 35.6170213,18.1276596 C37.728817,18.1276596 39.4468085,19.8456511 39.4468085,21.9574468 C39.4468085,22.5522383 39.3121021,23.1246638 39.0462638,23.6587915 C38.9282043,23.8961362 38.9412766,24.1778043 39.0808851,24.4033021 C39.2204936,24.6288 39.4668255,24.7659574 39.7320511,24.7659574 L46.4680851,24.7659574 L46.4680851,46.4680851 L24.7659574,46.4680851 L24.7659574,46.4680851 Z" id="Shape"></path>
									<circle id="Oval" cx="42.587234" cy="42.587234" r="1"></circle>
									<circle id="Oval" cx="39.5234043" cy="39.5234043" r="1"></circle>
									<circle id="Oval" cx="5.41276596" cy="5.41276596" r="1"></circle>
								</g>
							</g>
						</g>
					</g>
				</svg>
			</div>
			<h2 class="text-center">Longer Tagline on What is It</h2>
			<div class="col-md-8 col-sm-8 col-xs-10 col-md-offset-2 col-sm-offset-2 col-xs-offset-1 text-center">
				<img src="<?php echo get_template_directory_uri();?>/assets/img/notebook-image.png">
				<br><br>
				<p>Desktop publishing search packages and web packages page editors use Lorem as their web page editors use Loerm their default publishing search packages. Desktop publishing search packages and web packages page editors use Lorem as their web page editors use Loerm their default publishing search packages</p>
				<br><br>
				<a href="#" class="brinqa-btn filled-green-btn" >Learn More</a>
			</div>
		</div>
	</section>

	<section class="text-section greyed bordered-section">
		<div class="container">
			<div class="text-center-xs col-md-6 col-sm-6 col-xs-12 additional-y-spacing wow fadeInUp">
				<h2 class="underlined-heading blue-underlined">Connectors</h2>
				<p>Ppublishing search packages and web packages page editors use Lorem as their web page editors use Loerm their default publishing search packages Loerm their default publishing search packages</p>
				<p>Ppublishing search packages and web packages page editors use Lorem as their web page editors use Loerm their default publishing search packages</p>
				<br>
				<a href="#" class="brinqa-btn filled-blue-btn" >Learn More</a>
			</div>
		</div>
		<div class="static-content-image">
			<img class="wow bounceInRight" src="<?php echo get_template_directory_uri();?>/assets/img/sceen1.jpg" style="visibility: visible; animation-name: bounceInRight;">
		</div>
	</section>
	<!--HARDCODED PAGE CONTENT END HERE-->

<?php get_template_part( 'template-parts/section', 'free-trial' ); ?>

<?php get_template_part( 'template-parts/section', 'twitter-feed' ); ?>

<?php get_footer(); ?>