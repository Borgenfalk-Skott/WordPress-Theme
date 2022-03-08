<!DOCTYPE html>
<html lang="<?=esc_attr(get_bloginfo('language'));?>">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="icon" type="image/png" href="<?=get_template_directory_uri();?>/img/favicon.png" sizes="32x32">

    <title><?=esc_attr(wp_title('-', false, 'right') . get_bloginfo('name'));?></title>
    <meta name="description" content="<?=esc_attr(get_bloginfo('description'));?>">
    <meta name="author" content="<?=esc_attr(get_bloginfo('name'));?>">
    <link rel="canonical" href="<?=esc_url(home_url($wp->request));?>">

    <link rel="stylesheet" type="text/css" href="<?=get_template_directory_uri();?>/build/style.min.css">

    <?php wp_head(); ?>
  </head>
  <body class="<?=esc_attr( implode(' ', get_body_class()) );?>">
    <?php
      global $mustacheEngine;

      echo $mustacheEngine->render('header', array(
        'logo_link_href'          =>  esc_url(home_url('/')),
        'logo_img_alt'            =>  esc_attr( get_bloginfo('name') ),
        'logo_img_src'            =>  get_template_directory_uri() . '/screenshot.png',

        'main_menu'               =>  wp_nav_menu(array(
          'container'             => 'nav',
          'container_class'       => 'main-menu',
          'theme_location'        => 'primary',
          'echo'                  =>  false
        ))
      ));
    ?>