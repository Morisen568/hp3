<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0, viewport-fit=cover" />
    <title>HP3</title>
    <meta name="description" content="" />
    <link rel="icon" type="image/x-icon" href="">
    <link rel="apple-touch-icon" sizes="180×180" href="">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/vegas/2.4.4/vegas.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/reset.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/style.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/index.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/animation.
    css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/photos.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/archive.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/single.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Serif&family=Noto+Serif+JP:wght@400;500;600;700;900&family=Pinyon+Script&display=swap"
      rel="stylesheet">

  </head>

  <body>
<header>
    <div class="header_all">
      <nav>

        <?php
          $args = array(
            'menu' => 'menu',
            'menu_class' => '',
            'container' => false,
          );

        wp_nav_menu($args);
        ?>
 
      </nav>
    </div>
    </header>