<?php
function add_css()
{
   wp_register_style('normalize', get_template_directory_uri() . '/assets/css/normalize.css', false,'1.1','all');
   wp_enqueue_style( 'normalize');
   wp_register_style('style', get_template_directory_uri() . '/style.css', false,'1.1','all');
   wp_enqueue_style( 'style');
   wp_register_style('aos', get_template_directory_uri() . 'https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css', false,'1.1','all');
   wp_enqueue_style( 'aos');


}
add_action('wp_enqueue_scripts', 'add_css');


function add_script()
{
   wp_register_script('js-script', get_template_directory_uri() . '/assets/js/script.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'js-script');
   wp_register_script('change', get_template_directory_uri() . 'https://code.jquery.com/jquery-3.6.4.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'jQuery');
   wp_register_script('popup', get_template_directory_uri() . 'https://unpkg.com/aos@2.3.1/dist/aos.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'aos');

}
add_action('wp_enqueue_scripts', 'add_script');

add_theme_support( 'menus' );
