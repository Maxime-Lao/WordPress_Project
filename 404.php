<?php
	get_header();
?>

<main id="site-content">
	<section class="error">
		<div class="container">
			<div class="section-inner thin error404-content">

				<h1 class="entry-title"><?php _e( '404 Error.', 'esgi' ); ?></h1>

				<div class="intro-text"><p><?php _e( "The page you were looking for couldn't be found. <br> Maybe try a search?", 'esgi' ); ?></p></div><br>

				<?php
				get_search_form();
				?>

			</div><!-- .section-inner -->
		</div>
	</section>
</main><!-- #site-content -->

<script> 
	document.getElementById("s").style.color = "white";
	document.getElementById("site-header").style.background = "#050A3A";
</script>
<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php
get_footer();
