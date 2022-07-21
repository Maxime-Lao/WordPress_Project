<?php
/*
    Template Name: Contact
    */
get_header();
?>

<main>
    <div class="container">
        <section class="error">
            <h1 class="uwu">Contacts.</h1><br>
            <div class="footer-cta pt-5 pb-5">
                <div class="contact-headline">
                    <div class="col-xl-2 col-md-2 mb-30">
                        <?php echo get_theme_mod('contact-header') ?>
                        <?= get_theme_mod('contacttext1text1') ?>
                        <?= get_theme_mod('contacttext1text2') ?>
                        <?= get_theme_mod('contacttext1text3') ?>
                        <?= get_theme_mod('contacttext1text4') ?>
                        <?= get_theme_mod('contacttext1text5') ?>
                        <?= get_theme_mod('contacttext1text6') ?>
                        <?= get_theme_mod('contacttext1text7') ?>
                        <?= get_theme_mod('contacttext1text8') ?>
                        <?= get_theme_mod('contacttext1text9') ?>
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