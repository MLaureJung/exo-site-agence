<?php 

require 'customizer/oagency_carousel.php';
require 'customizer/oagency_posts.php';

if (!function_exists('oagency_customize_register')) {

    function oagency_customize_register($wp_customize) {

     
        $wp_customize->add_panel(
         
            'oagency_theme_panel',
            [
                'title' => 'oAgency',
                'description' => 'oAgency Panel - gestion du thème',
                'priority' => 1
            ]
        );


        $wp_customize->add_section(

            'oagency_carousel',
            [
                'title' => 'Carousel',
                'description' => 'oAgency Carousel',
                'panel' => 'oagency_theme_panel'
            ]
        );

        $wp_customize->add_section(
            'oagency_posts',
            [
                'title' => 'Posts',
                'description' => 'oAgency Posts',
                'panel' => 'oagency_theme_panel'
            ]
            );

        oagency_carousel($wp_customize);
        oagency_posts($wp_customize);

    }


}

add_action('customize_register', 'oagency_customize_register');