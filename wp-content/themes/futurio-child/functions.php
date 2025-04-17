<?php

function futurio_storefront_child_enqueue_styles() {

    wp_enqueue_style('futurio-storefront-style', get_template_directory_uri() . '/style.css');

    wp_enqueue_style('futurio-storefront-child-style', get_stylesheet_directory_uri() . '/style.css', array('futurio-storefront-style'));

}

add_action('wp_enqueue_scripts', 'futurio_storefront_child_enqueue_styles');

?>