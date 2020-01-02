<?php

if (!function_exists('oagency_setup')) {

    function oagency_setup() {

        add_theme_support('title-tag');

        add_theme_support('post-thumbnails');

        register_nav_menus([
            'header-nav' => 'Menu du header'
        ]);

    }

}

add_action('after_setup_theme', 'oagency_setup');
