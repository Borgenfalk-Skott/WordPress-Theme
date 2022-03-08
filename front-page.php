<?php
  get_header();
  global $mustacheEngine;
  

  /**
   * Render main content
   */
  if( have_posts() ){
    while( have_posts() ){
      the_post();

      echo $mustacheEngine->render('home', array(
        'the_content'         =>  apply_filters( 'the_content', get_the_content() )
      ));
    }
  }


  get_footer();
?>