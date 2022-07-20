 <?php
      echo '<div class="about_us">';
                the_content();
      echo '</div>';

      ?>
<section class="section_one_home">
    <div class="section_one">
        <div>
            <img src="<?php echo wp_get_attachment_url(get_theme_mod('home_section_one_image')) ?>">
        </div>
        <div class="right-part">
            <h2 class="titre"><?php echo get_theme_mod('home_section_one_h1') ?></h2>
            <p><?php echo get_theme_mod('home_section_one_p1') ?></p>
            <h2 class="titre"><?php echo get_theme_mod('home_section_one_h2') ?></h2>
            <p><?php echo get_theme_mod('home_section_one_p2') ?></p>
            <h2 class="titre"><?php echo get_theme_mod('home_section_one_h3') ?></h2>
            <p><?php echo get_theme_mod('home_section_one_p3') ?></p>
        </div>
    </div>

</section>