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
                    <h4>Location</h4>
                    <p>242 Rue du Faubourg Saint-Antoine</p>
                    <p>75020 Paris FRANCE</p>
                </div>
                <div class="info">
                    <h4>Manager</h4>
                    <p>+33 1 53 31 25 23</p>
                    <p>info@company.com</p>
                </div>
                <div class="info">
                    <h4>CEO</h4>
                    <p>+33 1 53 31 25 25</p>
                    <p>ceo@company.com</p>
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
