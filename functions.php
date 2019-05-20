<?php 

// load script
function load_file() {
  wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
  wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css' );
}

add_action('wp_enqueue_scripts', 'load_file');

add_action('after_setup_theme', 'init_setup');



// the excerpt
function get_excerpt_length() {
  return 15;
}
function get_excerpt_text() {
  return '...';
}

add_filter('excerpt_length', 'get_excerpt_length');
add_filter('excerpt_more', 'get_excerpt_text');


function init_setup() {
  // nav menu in dashboard
  register_nav_menus([
    'main_menu' => 'Menu Utama',
    'footer_menu' => 'Menu Footer',
    'coba_menu' => 'Coba Menu'
  ]);

  // add featured image
  add_theme_support('post-thumbnails');
  add_image_size('big-thumb', 250, 150, true);
}
