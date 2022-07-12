<?php
/**
 * The template for displaying the 404 template in the Twenty Twenty theme.
 *
 * @package WordPress
 * @subpackage ESGI
 * @since ESGI 1.0
 */

get_header();
?>

<main id="site-content">

	<div class="section-inner thin error404-content">

		<h1 class="entry-title"><?php _e( '404 Error.', 'esgi' ); ?></h1>

		<div class="intro-text"><p><?php _e( "The page you were looking for couldn't be found. Maybe try a search?", 'esgi' ); ?></p></div>

		<?php
		get_search_form(
			array(
				'aria_label' => __( '404 not found', 'esgi' ),
			)
		);
		?>

	</div><!-- .section-inner -->

</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php
get_footer();
