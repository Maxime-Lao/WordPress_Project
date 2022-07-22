<?php
/*
Template Name: Services
*/
get_header();
?>
<div class="container">
<?php
echo '<h1 class="page-titre">' . $post->post_title . '</h1>';
?>
</div>
<?php //include 'section_two_home.php'; ?>
<section class="section_two_home">
        <div class="section_two">
            <div class="images">
                <div class="image">
                    <img  src="<?php echo wp_get_attachment_url(get_theme_mod('home_section_two_image_1')) ?>">
                </div>
                <div class="image">
                    <img  src="<?php echo wp_get_attachment_url(get_theme_mod('home_section_two_image_2')) ?>">
                </div>
                <div class="image text">
                    <p>Privat Parties</p><hr>
                </div>
                <div class="image">
                    <img  src="<?php echo wp_get_attachment_url(get_theme_mod('home_section_two_image_4')) ?>">
                </div>
            </div>
        </div>
</section>

<section class="parties">
    <h2>Corp. Parties</h2>
    <p>Specializing in the creation of exceptional events for private and corporate clients, we design, plan and manage every project from conception to execution. </p>
</section>
<section class="background">
  <img src="http://localhost/projet_wordpress/wordpress/wp-content/uploads/2022/07/9.png">
</section>

<?php get_footer(); ?>