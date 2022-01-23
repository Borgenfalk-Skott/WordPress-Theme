<?php
  /**
   * Composer autoloader
   */
  if ( file_exists( __DIR__ . '/vendor/autoload.php' ) ) {
    require_once __DIR__ . '/vendor/autoload.php';
  }


  /**
   * After Setup Theme
   */
  add_action( 'after_setup_theme', function(){
    $txtDomain = 'WP_THEME';

    /**
     * Load text domain and lang dir
     */
    load_theme_textdomain( $txtDomain, get_template_directory() . '/languages' );


    /**
     * Load custom editor styles (default: editor-style.css)
     */
    add_theme_support('editor-styles');
    add_editor_style();


    /**
     * Add support for post thumbnails
     */
    add_theme_support( 'post-thumbnails' );


    /**
     * Add excerpt support for pages
     */
    add_post_type_support( 'page', 'excerpt' );


    /**
     * Add support for align wide blocks
     */
    add_theme_support( 'align-wide' );


    /**
     * Disable custom block font sizes
     */
    //add_theme_support( 'disable-custom-font-sizes' );

     
    /**
     * Disable custom block colors
     */
    //add_theme_support( 'disable-custom-colors' );


    /**
     * Disable custom block gradients
     */
    //add_theme_support( 'disable-custom-gradients' );


    /**
     * Add custom image sizes
     */
    add_image_size( 'thumb@2x', 300, 300, true );
    add_image_size( 'medium@2x', 600, 600, false );
    add_image_size( 'large@2x', 2048, 2048, false );


    /**
     * Register nav menus
     */
    register_nav_menus(array(
      'primary'       =>    __( 'Primary nav', $txtDomain ),
      'secondary'     =>    __( 'Secondary nav', $txtDomain )
    ));

  });
?>