<style>
    .section_two_home{
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
        flex-direction: row;
    }

    /* Resize images */
    .image{
        width: calc(100%/4);
        height: auto;
    }
    .text{
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        font-family: 'Mulish', sans-serif;
        font-style: normal;
        font-weight: 600;
        font-size: 35px;
        line-height: 44px;
        color: #050A3A;
    }
    .text hr{
        width: 50%;
        height: 5px;
        margin: 0;
        padding:0;
        background: linear-gradient(90deg, #FFD0A8 0%, #FF4FC0 100%);
    }
    .text h2{
        font-family: 'Mulish', sans-serif;
        font-style: normal;
        font-weight: 600;
        font-size: 35px;
        line-height: 44px;
    }
    .about_us h2{
        font-family: 'Mulish', sans-serif;
        font-style: normal;
        font-weight: 600;
        font-size: 63px;
        line-height: 79px;
        letter-spacing: 3px;
        color: #050A3A;
    }
    .about_us p{
        font-family: 'Mulish', sans-serif;
        font-style: normal;
        font-weight: 400;
        font-size: 26px;
        line-height: 42px;
        color: #8A8A8A;
    }
    .about_us{
        width: 1080px;
        margin: 0;
        margin-left: 13%;
        padding: 10%;
    }
    .para{
        margin: 0;
        padding-right: 42%;
    }
    .image img{
        width: 100%;
    }
    .section_two h1{
        font-family: 'Mulish', sans-serif;
        font-style: normal;
        font-weight: 600;
        font-size: 47px;
        margin-left: 10%;
        margin-bottom: 3%;
        line-height: 59px;
        color: #050A3A;
    }


    .section_one_home{
        width: 100vw;
        max-width: 100vw;
        position: relative;
        left: 50%;
        right: 50%;
        margin-left: -50vw;
        margin-right: -50vw;
    }
    .section_one{
        display: flex;
        justify-content: space-between;
    }
    .right-part{
        margin-left: 10%;
        margin-top: 10%;
    }
    .right-part p{
        font-family: 'Mulish', sans-serif;
        font-style: normal;
        font-weight: 400;
        font-size: 20px;
        line-height: 30px;/* or 190% */
        color: #8A8A8A;
    }
    .right-part h2{
        font-family: 'Mulish', sans-serif;
        font-style: normal;
        font-weight: 600;
        font-size: 47px;
        line-height: 59px;
        color: #050A3A;
    }

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
    .page-titre{
        font-family: 'Mulish';
        font-style: normal;
        font-weight: 500;
        font-size: 84px;
        line-height: 105px;
        color: #050A3A;
        margin-top: 5%;
        margin-right: 15%;
        margin-bottom: 15%;
        margin-left: 2%;

    }
    .thumbnail{
        right: 0;
        width: 100%;
        height: 100%;
        margin-left: 23%;
    }
</style>

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


