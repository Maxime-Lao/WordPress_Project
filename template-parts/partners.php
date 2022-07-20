<?php
    /*
    Template Name: partners
    */
    get_header();
?>

    <main>	
        <div class="container">
            <section class="error">
                <h1 class="uwu"><?= $post->post_title ?></h1><br>
                <div class="footer-cta pt-5 pb-5">
                    <div class="row">
                        <div class="col-xl-2 col-md-2 mb-30">
                            <img src="<?php echo wp_get_attachment_url(get_theme_mod('partners_section_first_image')) ?>">
                        </div>
                        <div class="col-xl-2 col-md-2 mb-30">
                            <img src="<?php echo wp_get_attachment_url(get_theme_mod('partners_section_second_image')) ?>">
                        </div>
                        <div class="col-xl-2 col-md-2 mb-30">
                            <img src="<?php echo wp_get_attachment_url(get_theme_mod('partners_section_third_image')) ?>">
                        </div>
                        <div class="col-xl-2 col-md-2 mb-30">
                            <img src="<?php echo wp_get_attachment_url(get_theme_mod('partners_section_fourth_image')) ?>">
                        </div>
                        <div class="col-xl-2 col-md-2 mb-30">
                            <img src="<?php echo wp_get_attachment_url(get_theme_mod('partners_section_fifth_image')) ?>">
                        </div>
                        <div class="col-xl-2 col-md-2 mb-30">
                            <img src="<?php echo wp_get_attachment_url(get_theme_mod('partners_section_sixth_image')) ?>">
                        </div>
                    </div>
                </div>
            </section>
        </div>
	</main>
    <script>
        document.getElementById("logo").classList.remove("white-svg");
    </script>

<?php get_footer(); ?>