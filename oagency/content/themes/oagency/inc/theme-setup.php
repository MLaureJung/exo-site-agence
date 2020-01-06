<?php

if (!function_exists('oagency_setup')) {

    function oagency_setup() {

        add_theme_support('title-tag');

        add_theme_support('post-thumbnails');

        register_nav_menus([
            'header-nav' => 'Menu du header',
            'footer-nav' => 'Menu du footer'
        ]);

    function add_additional_class_on_li($classes, $item, $args) {
        if(isset($args->add_li_class)) {
            $classes[] = $args->add_li_class;
        }
        return $classes;
    }
      

    }

}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

add_action('after_setup_theme', 'oagency_setup');
