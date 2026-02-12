<?php
if (!defined('ABSPATH')) { exit; }

function humanity_charity_setup() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('html5', array('search-form','comment-form','comment-list','gallery','caption','style','script'));
  register_nav_menus(array(
    'main_menu' => __('Main Menu', 'humanity-charity')
  ));
}
add_action('after_setup_theme', 'humanity_charity_setup');

function humanity_charity_assets() {
  wp_enqueue_style('humanity-style', get_stylesheet_uri(), array(), '1.0.0');
}
add_action('wp_enqueue_scripts', 'humanity_charity_assets');

/**
 * Helper: gets donation URL (set in Customizer if desired).
 */
function humanity_charity_get_donate_url() {
  $url = get_theme_mod('hc_donate_url', '');
  if ($url) return esc_url($url);
  // fallback to /donate page if exists
  $page = get_page_by_path('donate');
  if ($page) return get_permalink($page);
  return home_url('/');
}

function humanity_charity_customize_register($wp_customize) {
  $wp_customize->add_section('hc_charity', array(
    'title' => __('إعدادات الجمعية', 'humanity-charity'),
    'priority' => 30,
  ));

  $wp_customize->add_setting('hc_donate_url', array('default' => ''));
  $wp_customize->add_control('hc_donate_url', array(
    'label' => __('رابط زر التبرع (اختياري)', 'humanity-charity'),
    'section' => 'hc_charity',
    'type' => 'url',
    'description' => __('ضع رابط منصة/حساب التبرع. إذا تُرك فارغًا سيستخدم صفحة /donate إن وجدت.', 'humanity-charity'),
  ));

  $wp_customize->add_setting('hc_phone', array('default' => ''));
  $wp_customize->add_control('hc_phone', array(
    'label' => __('رقم التواصل (اختياري)', 'humanity-charity'),
    'section' => 'hc_charity',
    'type' => 'text',
  ));

  $wp_customize->add_setting('hc_email', array('default' => ''));
  $wp_customize->add_control('hc_email', array(
    'label' => __('بريد التواصل (اختياري)', 'humanity-charity'),
    'section' => 'hc_charity',
    'type' => 'text',
  ));
}
add_action('customize_register', 'humanity_charity_customize_register');
