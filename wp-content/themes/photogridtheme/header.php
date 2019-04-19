<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>
      <?php wp_title('&laquo;', true, 'right'); ?> 
      <?php bloginfo('name'); ?>
    </title>
    <?php wp_head(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!--[if lt IE 9]><script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script><![endif]-->
    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-latest.js" type="text/javascript"></script>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" title="no title" charset="utf-8"/>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/scripts.js" type="text/javascript"></script>
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.ico">
    <!-- SOCIAL ICONS -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- SOCIAL ICONS -->
  </head>
  <body>
    <?php $shortname = "grid_press"; ?>
    <?php if(get_option($shortname.'_custom_background_color','') != "") { ?>
    <style type="text/css"> body { background-color: 
      <?php echo get_option($shortname.'_custom_background_color',''); ?>; }
    </style>
    <?php } ?>
    <div id="main_container">
      <div id="header">
        <div class="head_social_cont">
          <?php if(get_option($shortname.'_pinterest_link','') != "") { ?> 
          <a href="<?php echo get_option($shortname.'_pinterest_link',''); ?>">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/pinterest-icon.png" /></a>
          <?php } ?>
          <?php if(get_option($shortname.'_dribbble_link','') != "") { ?> 
          <a href="<?php echo get_option($shortname.'_dribbble_link',''); ?>">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/dribbble-icon.png" /></a>
          <?php } ?>
          <?php if(get_option($shortname.'_google_plus_link','') != "") { ?> 
          <a href="<?php echo get_option($shortname.'_google_plus_link',''); ?>">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/google-plus-icon.png" /></a>
          <?php } ?>
          <?php if(get_option($shortname.'_facebook_link','') != "") { ?> 
          <a href="<?php echo get_option($shortname.'_facebook_link',''); ?>">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/facebook-icon.png" /></a>
          <?php } ?>
          <?php if(get_option($shortname.'_twitter_link','') != "") { ?> 
          <a href="<?php echo get_option($shortname.'_twitter_link',''); ?>">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/twitter-icon.png" /></a>
          <?php } ?>
          <div class="clear">
          </div>
        </div>
        <!--//head_social_cont-->
        <div class="clear">
        </div>
        <?php if(get_option($shortname.'_custom_logo_url','') != "") { ?>
        <div align="center">
          <a href="<?php bloginfo('url'); ?>">
            <img src="<?php echo stripslashes(stripslashes(get_option($shortname.'_custom_logo_url',''))); ?>" class="logo" alt="logo" /></a>
        </div>
        <?php } else { ?>
        <div align="center">
          <a href="<?php bloginfo('url'); ?>">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.jpg" class="logo" alt="logo" /></a>
        </div>
        <?php } ?>
        <div class="head_menu_cont">
          <!--<ul> <li><a href="#">HOME</a></li> <li><a href="#">ABOUT</a></li> <li><a href="#">CATEGORY</a></li> <li><a href="#">BLOG</a></li> <li><a href="#">CONTACT</a></li></ul>-->
          <?php wp_nav_menu('menu=header_menu&container=false&menu_id=menu'); ?>
          <div class="gk-social"> 
            <a href="http://vk.com/alazankina" target="blank">
              <i class="fa fa-vk fa-2x"></i></a> 
            <a href="http://facebook.com/alazankina" target="blank">
              <i class="fa fa-facebook fa-2x"></i></a> 
            <a href="http://instagram.com/alazankina" target="blank">
              <i class="fa fa-instagram fa-2x"></i></a>
            <a href="http://alazankina.tumblr.com/" target="blank">
              <i class="fa fa-tumblr fa-2x"></i></a> 
            <a href="http://pinterest.com/alazankina" target="blank">
              <i class="fa fa-pinterest fa-2x"></i></a>
          </div>
          <div class="clear">
          </div>
        </div>
        <!--//head_menu_cont-->
        <div class="clear">
        </div>
      </div>
      <!--//header-->