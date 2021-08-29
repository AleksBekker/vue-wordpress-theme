<?php

function enqueue_vue_scripts() {

  wp_enqueue_script(
    'vue-wordpress-theme-js',
    get_stylesheet_directory_uri() . '/app.js'
  );

  wp_enqueue_script(
    'vue-wordpress-theme-style',
    get_stylesheet_directory_uri() . '/dist/styles.css'
  );

}

add_action( 'wp_enqueue_scripts', 'enqueue_vue_scripts', 1000);