<?php
if (!defined('ABSPATH')) { exit; }
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header">
  <div class="container brand">
    <div>
      <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
      <p class="site-tagline"><?php bloginfo('description'); ?></p>
    </div>
    <nav class="nav" aria-label="القائمة الرئيسية">
      <?php
        wp_nav_menu(array(
          'theme_location' => 'main_menu',
          'container' => false,
          'fallback_cb' => false
        ));
      ?>
      <a class="donate-btn" href="<?php echo humanity_charity_get_donate_url(); ?>">تبرع الآن</a>
    </nav>
  </div>
</header>
<main class="container">
