<?php
  /**
   * WordPress Theme
   */

  // Define text domain for translations
  define('TXT_DOMAIN', 'WP_THEME');


  // Composer autoloader
  if( file_exists( __DIR__ . '/vendor/autoload.php' ) ){
    require_once __DIR__ . '/vendor/autoload.php';

    // Setup mustache php template engine
    $mustacheEngine = new Mustache_Engine(array(
      'loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__) . '/tpls'),
      'entity_flags' => ENT_QUOTES
    ));
  }


  add_action( 'after_setup_theme', function(){
    // Load text domain and lang dir
    load_theme_textdomain( TXT_DOMAIN, get_template_directory() . '/languages' );

    // Load custom editor styles (default: editor-style.css)
    add_theme_support('editor-styles');
    add_editor_style();

    // Add support for post thumbnails
    add_theme_support( 'post-thumbnails' );

    // Add excerpt support for pages
    add_post_type_support( 'page', 'excerpt' );

    // Add support for align wide blocks
    add_theme_support( 'align-wide' );
    
    // Add custom image sizes
    add_image_size( 'thumb@2x', 300, 300, true );
    add_image_size( 'medium@2x', 600, 600, false );
    add_image_size( 'large@2x', 2048, 2048, false );

    // Register navs
    register_nav_menus(array(
      'primary'       =>    __( 'Primary nav', TXT_DOMAIN ),
      'secondary'     =>    __( 'Secondary nav', TXT_DOMAIN ),
      'tertiary'      =>    __( 'Tertiary nav', TXT_DOMAIN ),
      'quaternary'    =>    __( 'Quaternary nav', TXT_DOMAIN )
    ));

  });
?>