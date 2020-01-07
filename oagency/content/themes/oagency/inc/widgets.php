<?php

if (!function_exists('widgets_init')) {

    function widgets_area_init() {

        register_sidebar(array(
            'name' => 'Widget Area',
            'id' => 'widget_area',
            'before_widget' => '<aside>',
            'after_widget' => '</aside>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>'
        ));
    }
}

add_action('widgets_init', 'widgets_area_init');