<section class="partners">
    <div class="container">
        <div class="footer-cta pt-5 pb-5">
            <h1 class="uwu"><?= $post->post_title ?></h1><br>
            <div class="partners-flex">
                <div class="flex-item">
                    <img src="<?php echo wp_get_attachment_url(get_theme_mod('partners_section_first_image')) ?>">
                </div>
                <div class="flex-item">
                    <img src="<?php echo wp_get_attachment_url(get_theme_mod('partners_section_second_image')) ?>">
                </div>
                <div class="flex-item">
                    <img src="<?php echo wp_get_attachment_url(get_theme_mod('partners_section_third_image')) ?>">
                </div>
                <div class="flex-item">
                    <img src="<?php echo wp_get_attachment_url(get_theme_mod('partners_section_fourth_image')) ?>">
                </div>
                <div class="flex-item">
                    <img src="<?php echo wp_get_attachment_url(get_theme_mod('partners_section_fifth_image')) ?>">
                </div>
                <div class="flex-item">
                    <img src="<?php echo wp_get_attachment_url(get_theme_mod('partners_section_sixth_image')) ?>">
                </div>
            </div>
        </div>
    </div>
</section>