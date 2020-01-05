<?php 

require 'customizer/oagency_carousel.php';
require 'customizer/oagency_posts.php';
require 'customizer/oagency_call.php';
require 'customizer/oagency_colors.php';
require 'customizer/oagency_footer.php';

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

        $wp_customize->add_section(
            'oagency_call',
            [
                'title'=> 'Call To Action',
                'description' => 'oAgency Call to action',
                'panel' => 'oagency_theme_panel'
            ]
        );

        $wp_customize->add_section(
            'oagency_colors',
            [
                'title' => 'Couleurs',
                'description' => 'oAgency Couleurs',
                'panel' => 'oagency_theme_panel'
            ]
        );

        $wp_customize->add_section(
            'oagency_footer',
            [
                'title' => 'Footer',
                'description' => 'oAgency Footer',
                'panel' => 'oagency_theme_panel'
            ]
        );

        oagency_carousel($wp_customize);
        oagency_posts($wp_customize);
        oagency_call($wp_customize);
        oagency_colors($wp_customize);
        oagency_footer($wp_customize);

    }


}

add_action('customize_register', 'oagency_customize_register');