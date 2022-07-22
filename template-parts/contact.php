<?php
/*
  Template Name: Contact
*/
?>
<?php get_header(); ?>
<main>
    <div class="container2 page-contact">
        <h2 class="titre-contact"><?= ucfirst( $post->post_title ) ?>.</h2>
        <p class="contact-para">A desire for a big party or a very select congress? Contact us</>
        <div class="row">
            <div id="information-contact">
                <div class="info">
                    <h4><?php echo get_theme_mod('contacttext1') ?></h4>
                    <p><?php echo get_theme_mod('contacttext2') ?></p>
                    <p><?php echo get_theme_mod('contacttext3') ?></p>
                </div>
                <div class="info">
                    <h4><?php echo get_theme_mod('contacttext4') ?></h4>
                    <p><?php echo get_theme_mod('contacttext5') ?></p>
                    <p><?php echo get_theme_mod('contacttext6') ?></p>
                </div>
                <div class="info">
                    <h4><?php echo get_theme_mod('contacttext7') ?></h4>
                    <p><?php echo get_theme_mod('contacttext8') ?></p>
                    <p><?php echo get_theme_mod('contacttext9') ?></p>
                </div>

                <div class=" ">
                    <?php the_post_thumbnail('large',array( 'class' => 'thumbnail' )); ?>
                </div>
            </div>

            <div class="writeus">
                <h3 class="titre-contact">Write us here</h3>
                <p class="contact-para">Go! Don’t be shy.</p>
                <div class="contact-form">
                    <form action="" class="form-group">
                        <input type="text" name="subject" id="" placeholder="Subject">
                        <div>
                            <input type="email" name="email" id="" placeholder="Email">
                            <input type="text" name="phone" id="" placeholder="Phone no.">
                        </div>
                        <textarea name="message" id="message"  rows="10" placeholder="Message"></textarea>
                        <input type="submit" value="Submit">
                    </form>
                </div>

            </div>
        </div>
</main>
<?php get_footer(); ?>
