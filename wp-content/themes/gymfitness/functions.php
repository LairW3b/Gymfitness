<?php 

// Includes
require get_template_directory() . '/includes/widgets.php';

function gymfitness_setup() {
  //Imagenes destacadas
  add_theme_support('post-thumbnails');

  // Titulos para el SEO
  add_theme_support('title-tag');

}
// Esta funcion se activa cada que un tema a sido activado
add_action('after_setup_theme', 'gymfitness_setup');

function gymfitness_menus() {
  register_nav_menus( array(
    'menu-principal' => __('Menu Principal', 'gymfitnnes')
  ));
}

add_action('init', 'gymfitness_menus');

function gymfitness_scripts_styles() {

  wp_enqueue_style(
    'normalize',
    'https://necolas.github.io/normalize.css/8.0.1/normalize.css',
    array(),
    '8.0.1'
  );

  wp_enqueue_style(
    'style', 
    get_stylesheet_uri(),
    array('normalize'),
    '1.0.0'
  );

}

add_action('wp_enqueue_scripts', 'gymfitness_scripts_styles');

/** Definir zona de widgets */
function gymfitness_widgets() {
  register_sidebar(array(
    'name' => 'sidebar 1',
    'id' => 'sidebar_1',
    'before_widget' => '<div class="widget">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="text-center text-primary">',
    'after_title' => '</h3>'
  ));
}
add_action('widgets_init', 'gymfitness_widgets');

