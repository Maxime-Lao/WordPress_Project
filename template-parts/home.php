<style>
  .page-titre{
      font-family: 'Mulish';
      font-style: normal;
      font-weight: 600;
      font-size: 50px;
      line-height: 75px;
      float: left;
      color: #050A3A;
  }
  .thumbnail{
      display: flex;
      margin-left: 0;

  }
</style>

<?php
echo '<h1 class="page-titre">' . $post->post_title . '</h1>';
the_post_thumbnail('large',array( 'class' => 'thumbnail' ));
include 'section_one_home.php';
include 'section_two_home.php';
include 'section_three_home.php';


