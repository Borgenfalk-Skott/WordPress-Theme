<?php
  get_header();

  if( have_posts() ){
    while( have_posts() ){
      the_post();

      echo '<h6>Template: index.php</h6>';

      the_title();
      the_content();
    }
  }

  get_footer();
?>