<!DOCTYPE html>
<html lang="<?=esc_attr(get_bloginfo('language'));?>">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="icon" type="image/png" href="<?=get_template_directory_uri();?>/img/favicon.png" sizes="32x32">
    <link rel="apple-touch-icon" href="<?=get_template_directory_uri();?>/img/touchicon.png">

    <title><?=esc_attr(wp_title('-', false, 'right') . get_bloginfo('name'));?></title>
    <meta name="description" content="<?=esc_attr(get_bloginfo('description'));?>">
    <meta name="author" content="<?=esc_attr(get_bloginfo('name'));?>">
    <link rel="canonical" href="<?=esc_url(home_url($wp->request));?>">

    <link rel="stylesheet" type="text/css" href="<?=get_template_directory_uri();?>/build/style.min.css">

    <?php wp_head(); ?>
  </head>
  <body class="<?=esc_attr( implode(' ', get_body_class()) );?>">
    <div class="wrapper">
      <header>
        <?php
          wp_nav_menu(array(
            'container'           => 'nav',
            'container_class'     => 'main-menu',
            'theme_location'      => 'primary'
          ));
        ?>
      </header>