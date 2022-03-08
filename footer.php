    <?php
      global $mustacheEngine;

      echo $mustacheEngine->render('footer', array(
        'logo_link_href'          =>  esc_url( home_url('/') ),
        'logo_img_src'            =>  get_template_directory_uri() . '/screenshot.png',
        'logo_img_alt'            =>  esc_attr( get_bloginfo('name') ),
        'current_year'            =>  date('Y'),

        'footer_primary_nav'      =>  wp_nav_menu(array(
          'container'             => 'nav',
          'container_class'       => 'footer-menu',
          'theme_location'        => 'primary',
          'echo'                  =>  false
        )),
        
        'footer_secondary_nav'    =>  wp_nav_menu(array(
          'container'             => 'nav',
          'container_class'       => 'footer-menu',
          'theme_location'        => 'secondary',
          'echo'                  =>  false
        )),

        'footer_tertiary_nav'    =>  wp_nav_menu(array(
          'container'             => 'nav',
          'container_class'       => 'footer-menu',
          'theme_location'        => 'tertiary',
          'echo'                  =>  false
        )),

        'footer_quaternary_nav'    =>  wp_nav_menu(array(
          'container'             => 'nav',
          'container_class'       => 'footer-menu',
          'theme_location'        => 'quaternary',
          'echo'                  =>  false
        ))
      ));
    ?>

    <?php wp_footer(); ?>
    <script type="text/javascript" src="<?=get_template_directory_uri();?>/build/app.min.js"></script>
  </body>
</html>
