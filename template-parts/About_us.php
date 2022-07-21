<?php
/*
Template Name: About us
*/
get_header();
?>
<section>
    <div class="container">
         <?php
    echo '<h1 class="page-titre">' . $post->post_title . '.</h1>'; ?>
    </div>
   <?php
    the_post_thumbnail('large',array( 'class' => 'thumbnail' ));
    echo '<div class="about_us container">';
    the_content();
    echo '</div>';
    ?>
</section>
<?php
include 'section_one_home.php';
include 'our_teams.php'
?>

<?php get_footer(); ?>

