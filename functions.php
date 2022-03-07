<?php
// Sets up the theme defaults and registers support for various WordPress features.
add_action( 'after_setup_theme', function() {
  // Add default posts & comments RSS feed links to <head>.
  add_theme_support( 'automatic-feed-links' );

  // Enable support for Post Thumbnails on posts and pages.
  add_theme_support( 'post-thumbnails' );

  add_theme_support( 'editor-styles' );

  add_theme_support( 'wp-block-styles' );
} );

// Enqueue scripts and styles.
add_action( 'wp_enqueue_scripts', function() {
  // Enqueue styles.
  wp_enqueue_style( 'mydevhouse-style', get_stylesheet_uri() );
} );