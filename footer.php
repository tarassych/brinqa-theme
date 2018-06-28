<footer class="text-section">
	<div class="container">
		<div class="col-md-9 col-sm-9 col-xs-12 no-x-padding">
			<div class="col-md-3 col-sm-3 hidden-xs">
				<h3>About</h3>
				<div class="green-spacer"></div>
				<?php
				if ( has_nav_menu( 'footer-nav-about' ) )
				{
					wp_nav_menu( array('theme_location' => 'footer-nav-about', 'depth' => 1) );
				}
				?>
			</div>

			<div class="col-md-3 col-sm-3 col-xs-4">
				<h3>Products</h3>
				<div class="green-spacer"></div>
				<?php
				if ( has_nav_menu( 'footer-nav-products' ) )
				{
					wp_nav_menu( array('theme_location' => 'footer-nav-products', 'depth' => 1) );
				}
				?>
			</div>

			<div class="col-md-3 col-sm-3 col-xs-4">
				<h3>Resources</h3>
				<div class="green-spacer"></div>
				<?php
				if ( has_nav_menu( 'footer-nav-resources' ) )
				{
					wp_nav_menu( array('theme_location' => 'footer-nav-resources', 'depth' => 1) );
				}
				?>
			</div>

			<div class="col-md-3 col-sm-3 col-xs-4">
				<h3>Get in Touch</h3>
				<div class="green-spacer"></div>
				<?php
				if ( has_nav_menu( 'footer-nav-getintouch' ) )
				{
					wp_nav_menu( array('theme_location' => 'footer-nav-getintouch', 'depth' => 1) );
				}
				?>
			</div>
		</div>
		<div class="visible-xs col-xs-12 footer-spacer">&nbsp;</div>
		<div class="col-md-3 col-sm-3 col-xs-12 no-x-padding" id="footer-contact-form">
			<div class="visible-xs col-xs-6">
				<h3>Contact Information</h3>
				<div class="green-spacer"></div>
				<ul>
					
					<li><a href="#">Mon-Fri: 9am-6pm</a></li>
					<li><a href="#">4505 Spicewood Springs Rd, Austin, TX 78759</a></li>
					<li><a href="mailto:info@brinqa.com">info@brinqa.com</a></li>
					<li><a href="tel:1-512-3721004">(512) 372-1004</a></li>
				</ul>
			</div>
			<div class="col-md-12 col-sm-12 col-xs-6">
				<h3>Contact Us</h3>
				<div class="green-spacer"></div>
				<?php gravity_form('Contact Us Footer', false, false, false, null, false, 100); ?>
			</div>

		</div>

	</div>
</footer>

<section class="dark-bg-section">
	<div class="container">
		<div class="copyrights row">
			<div class="col-md-3"><a href="/" title="Home Page" class="footer-logo"><img src="<?php echo get_template_directory_uri();?>/assets/img/footer-logo-new.png"> </a></div>
			<div class="col-md-6 text-center">&copy; <?php echo date('Y');?> BRINQA | <a href="/legal">Legal</a> | <a href="/legal-terms">Terms</a> </div>
			<div class="col-md-3 social-buttons">
				<a class="one-social-btn" href="https://www.linkedin.com/company/brinqa" target="_blank">
					<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="510px" height="510px" viewBox="0 0 510 510" style="enable-background:new 0 0 510 510;" xml:space="preserve">
						<g id="post-linkedin">
							<path d="M459,0H51C22.95,0,0,22.95,0,51v408c0,28.05,22.95,51,51,51h408c28.05,0,51-22.95,51-51V51C510,22.95,487.05,0,459,0z
								 M153,433.5H76.5V204H153V433.5z M114.75,160.65c-25.5,0-45.9-20.4-45.9-45.9s20.4-45.9,45.9-45.9s45.9,20.4,45.9,45.9
								S140.25,160.65,114.75,160.65z M433.5,433.5H357V298.35c0-20.399-17.85-38.25-38.25-38.25s-38.25,17.851-38.25,38.25V433.5H204
								V204h76.5v30.6c12.75-20.4,40.8-35.7,63.75-35.7c48.45,0,89.25,40.8,89.25,89.25V433.5z"/>
						</g>
					</svg>
				</a>
				<a class="one-social-btn" href="https://twitter.com/brinqa" target="_blank">
					<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 612 612" style="enable-background:new 0 0 612 612;" xml:space="preserve">
						<g>
							<path d="M612,116.258c-22.525,9.981-46.694,16.75-72.088,19.772c25.929-15.527,45.777-40.155,55.184-69.411
								c-24.322,14.379-51.169,24.82-79.775,30.48c-22.907-24.437-55.49-39.658-91.63-39.658c-69.334,0-125.551,56.217-125.551,125.513
								c0,9.828,1.109,19.427,3.251,28.606C197.065,206.32,104.556,156.337,42.641,80.386c-10.823,18.51-16.98,40.078-16.98,63.101
								c0,43.559,22.181,81.993,55.835,104.479c-20.575-0.688-39.926-6.348-56.867-15.756v1.568c0,60.806,43.291,111.554,100.693,123.104
								c-10.517,2.83-21.607,4.398-33.08,4.398c-8.107,0-15.947-0.803-23.634-2.333c15.985,49.907,62.336,86.199,117.253,87.194
								c-42.947,33.654-97.099,53.655-155.916,53.655c-10.134,0-20.116-0.612-29.944-1.721c55.567,35.681,121.536,56.485,192.438,56.485
								c230.948,0,357.188-191.291,357.188-357.188l-0.421-16.253C573.872,163.526,595.211,141.422,612,116.258z"/>
						</g>
					</svg>
				</a>
				<a class="one-social-btn" href="https://www.facebook.com/Brinqa-546883215350894/" target="_blank">
					<svg version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="510px" height="510px" viewBox="0 0 510 510" style="enable-background:new 0 0 510 510;" xml:space="preserve">
						<g>
							<path d="M459,0H51C22.95,0,0,22.95,0,51v408c0,28.05,22.95,51,51,51h408c28.05,0,51-22.95,51-51V51C510,22.95,487.05,0,459,0z
								 M433.5,51v76.5h-51c-15.3,0-25.5,10.2-25.5,25.5v51h76.5v76.5H357V459h-76.5V280.5h-51V204h51v-63.75
								C280.5,91.8,321.3,51,369.75,51H433.5z"/>
						</g>
					</svg>
				</a>
				<a class="one-social-btn" href="https://www.youtube.com/user/brinqamarket" target="_blank">
					<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="511.627px" height="511.627px" viewBox="0 0 511.627 511.627" style="enable-background:new 0 0 511.627 511.627;" xml:space="preserve">
							<g>
								<path d="M459.954,264.376c-2.471-11.233-7.949-20.653-16.416-28.264c-8.474-7.611-18.227-12.085-29.27-13.418
									c-35.02-3.806-87.837-5.708-158.457-5.708c-70.618,0-123.341,1.903-158.174,5.708c-11.227,1.333-21.029,5.807-29.407,13.418
									c-8.376,7.614-13.896,17.035-16.562,28.264c-4.948,22.083-7.423,55.391-7.423,99.931c0,45.299,2.475,78.61,7.423,99.93
									c2.478,11.225,7.951,20.653,16.421,28.261c8.47,7.614,18.225,11.991,29.263,13.134c35.026,3.997,87.847,5.996,158.461,5.996
									c70.609,0,123.44-1.999,158.453-5.996c11.043-1.143,20.748-5.52,29.126-13.134c8.377-7.607,13.897-17.036,16.56-28.261
									c4.948-22.083,7.426-55.391,7.426-99.93C467.377,319.007,464.899,285.695,459.954,264.376z M165.025,293.218h-30.549v162.45
									h-28.549v-162.45h-29.98v-26.837h89.079V293.218z M242.11,455.668H216.7v-15.421c-10.278,11.615-19.989,17.419-29.125,17.419
									c-8.754,0-14.275-3.524-16.556-10.564c-1.521-4.568-2.286-11.519-2.286-20.844V314.627h25.41v103.924
									c0,6.088,0.096,9.421,0.288,9.993c0.571,3.997,2.568,5.995,5.996,5.995c5.138,0,10.566-3.997,16.274-11.991V314.627h25.41V455.668
									z M339.183,413.411c0,13.894-0.855,23.417-2.56,28.558c-3.244,10.462-9.996,15.697-20.273,15.697
									c-9.137,0-17.986-5.235-26.556-15.697v13.702h-25.406v-189.29h25.406v61.955c8.189-10.273,17.036-15.413,26.556-15.413
									c10.277,0,17.029,5.331,20.273,15.988c1.704,4.948,2.56,14.369,2.56,28.264V413.411z M435.685,390.003h-51.104v24.839
									c0,13.134,4.374,19.697,13.131,19.697c6.279,0,10.089-3.422,11.42-10.28c0.376-1.902,0.571-7.706,0.571-17.412h25.981v3.71
									c0,9.329-0.195,14.846-0.572,16.563c-0.567,5.133-2.56,10.273-5.995,15.413c-6.852,10.089-17.139,15.133-30.841,15.133
									c-13.127,0-23.407-4.855-30.833-14.558c-5.517-7.043-8.275-18.083-8.275-33.12v-49.396c0-15.036,2.662-26.076,7.987-33.119
									c7.427-9.705,17.61-14.558,30.557-14.558c12.755,0,22.85,4.853,30.263,14.558c5.146,7.043,7.71,18.083,7.71,33.119V390.003
									L435.685,390.003z"/>
								<path d="M302.634,336.043c-4.38,0-8.658,2.101-12.847,6.283v85.934c4.188,4.186,8.467,6.279,12.847,6.279
									c7.419,0,11.14-6.372,11.14-19.13v-60.236C313.773,342.418,310.061,336.043,302.634,336.043z"/>
								<path d="M397.428,336.043c-8.565,0-12.847,6.475-12.847,19.41v13.134h25.693v-13.134
									C410.274,342.511,405.99,336.043,397.428,336.043z"/>
								<path d="M148.473,113.917v77.375h28.549v-77.375L211.563,0h-29.121l-19.41,75.089L142.759,0h-30.262
									c5.33,15.99,11.516,33.785,18.559,53.391C140.003,79.656,145.805,99.835,148.473,113.917z"/>
								<path d="M249.82,193.291c13.134,0,23.219-4.854,30.262-14.561c5.332-7.043,7.994-18.274,7.994-33.689V95.075
									c0-15.225-2.669-26.363-7.994-33.406c-7.043-9.707-17.128-14.561-30.262-14.561c-12.756,0-22.75,4.854-29.98,14.561
									c-5.327,7.043-7.992,18.181-7.992,33.406v49.965c0,15.225,2.662,26.457,7.992,33.689
									C227.073,188.437,237.063,193.291,249.82,193.291z M237.541,89.935c0-13.134,4.093-19.701,12.279-19.701
									s12.275,6.567,12.275,19.701v59.955c0,13.328-4.089,19.985-12.275,19.985s-12.279-6.661-12.279-19.985V89.935z"/>
								<path d="M328.328,193.291c9.523,0,19.328-5.901,29.413-17.705v15.703h25.981V48.822h-25.981v108.777
									c-5.712,8.186-11.133,12.275-16.279,12.275c-3.429,0-5.428-2.093-5.996-6.28c-0.191-0.381-0.287-3.715-0.287-9.994V48.822h-25.981
									v112.492c0,9.705,0.767,16.84,2.286,21.411C313.961,189.768,319.574,193.291,328.328,193.291z"/>
							</g>
					</svg>
				</a>
			</div>
		</div>
	</div>
</section>

<?php wp_footer(); ?>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>



</body>
</html>
