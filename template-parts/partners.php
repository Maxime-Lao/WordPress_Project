<?php
    /*
    Template Name: partners
    */
    get_header();
?>

    <main>	
        <div class="container">
            <section class="error">
                <h1 class="uwu">Our Partners.</h1><br>
                <div class="footer-cta pt-5 pb-5">
                    <div class="row">
                        <div class="col-xl-2 col-md-2 mb-30">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/svg/partner-1.svg" alt="logo">
                        </div>
                        <div class="col-xl-2 col-md-2 mb-30">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/svg/partner-2.svg" alt="logo">
                        </div>
                        <div class="col-xl-2 col-md-2 mb-30">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/svg/partner-3.svg" alt="logo">
                        </div>
                        <div class="col-xl-2 col-md-2 mb-30">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/svg/partner-4.svg" alt="logo">
                        </div>
                        <div class="col-xl-2 col-md-2 mb-30">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/svg/partner-5.svg" alt="logo">
                        </div>
                        <div class="col-xl-2 col-md-2 mb-30">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/svg/partner-6.svg" alt="logo">
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