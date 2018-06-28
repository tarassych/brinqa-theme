<div class="blog-categories-mobile hidden-sm-up">
	<form class="page-form blog-categories-mobile-form">
		<span class="caret"></span>
		<?php wp_dropdown_categories( array('show_option_all' => 'All Categories', 'show_count' => true) ); ?>
		<script type="text/javascript">
			<!--
			var dropdown = document.getElementById("cat");
			function onCatChange() {
				if ( dropdown.options[dropdown.selectedIndex].value > 0 ) {
					location.href = "<?php echo esc_url( home_url( '/' ) ); ?>?cat="+dropdown.options[dropdown.selectedIndex].value;
				}
			}
			dropdown.onchange = onCatChange;
			-->
		</script>
	</form>
</div>
