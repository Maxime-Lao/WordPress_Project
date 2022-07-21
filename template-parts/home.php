<section>
    <?php
     echo '<h1 class="page-titre">' . $post->post_title . '</h1>';
     the_post_thumbnail('large',array( 'class' => 'thumbnail' ));
     echo '<div class="about_us container">';
     the_content();
     echo '</div>';
     ?>
</section>
<?php
include 'section_one_home.php';
include 'section_two_home.php';
include 'section_three_home.php';


