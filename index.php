<?php
get_header();
?>
<h1>Hello</h1>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) {

			// Load posts loop.
			while ( have_posts() ) {
				the_post();
			}

		} else {

		}
		?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php
get_footer();
