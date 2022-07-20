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
    }
    .text hr{
        color: red;
    }
    .text h2{
        font-family: 'Mulish';
        font-style: normal;
        font-weight: 600;
        font-size: 35px;
        line-height: 44px;
    }
    .image img{
        width: 100%;
    }
    .section_two h1{
        font-family: 'Mulish';
        font-style: normal;
        font-weight: 600;
        font-size: 47px;
        margin-left: 10%;
        margin-bottom: 5%;
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
        margin-top: 100px;
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
        font-family: 'Mulish';
        font-style: normal;
        font-weight: 400;
        font-size: 20px;
        line-height: 30px;/* or 190% */
        color: #8A8A8A;
    }
    .right-part h2{
        font-family: 'Mulish';
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
</style>

<?php
echo '<h1 class="page-titre">' . $post->post_title . '</h1>';
the_post_thumbnail('large',array( 'class' => 'thumbnail' ));
include 'section_one_home.php';
include 'section_two_home.php';
include 'section_three_home.php';


