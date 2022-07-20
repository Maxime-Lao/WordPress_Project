<style>
    .section_three_home{
        width: 100vw;
        max-width: 100vw;
        position: relative;
        left: 50%;
        right: 50%;
        margin-left: -50vw;
        margin-right: -50vw;
        margin-top: 100px;
    }
    .images{
        display: flex;
    }

    /* Resize images */
    .image{
        width: 100%;
        height: auto;
    }
</style>

<section class="section_three_home">
    <div class="container section_three">
        <div>
            <h1 class="titre"><?php echo get_theme_mod('home_section_three_h1') ?></h1>
        </div>
        <div class="images">
            <div>
                <img class="image" src="<?php echo wp_get_attachment_url(get_theme_mod('home_section_three_image_1')) ?>">
            </div>
            <div>
                <img class="image" src="<?php echo wp_get_attachment_url(get_theme_mod('home_section_three_image_2')) ?>">
            </div>
            <div>
                <img class="image" src="<?php echo wp_get_attachment_url(get_theme_mod('home_section_three_image_3')) ?>">
            </div>
            <div>
                <img class="image" src="<?php echo wp_get_attachment_url(get_theme_mod('home_section_three_image_4')) ?>">
            </div>
            <div>
                <img class="image" src="<?php echo wp_get_attachment_url(get_theme_mod('home_section_three_image_3')) ?>">
            </div>
            <div>
                <img class="image" src="<?php echo wp_get_attachment_url(get_theme_mod('home_section_three_image_4')) ?>">
            </div>
        </div>
    </div>
</section>
