<?php


function oagency_carousel($wp_customize) {

    $wp_customize->add_setting(
        'oagency_carousel_active',
        []
    );

    $wp_customize->add_control(
        'oagency_carousel_active',
        [
            'type' => 'checkbox',
            'section' => 'oagency_carousel',
            'label' => 'Activate carousel',
            'description' => 'Permet de masquer ou afficher le carousel'
        ]
    );

    $wp_customize->add_setting(
        'oagency_carousel_insert_1',
        []
    );

    $wp_customize->add_control(
        'oagency_carousel_insert_1',
        [
            'type' => 'dropdown-pages',
            'section' => 'oagency_carousel',
            'label' => 'Slide 1#',
            'description' => 'Select a page for the slide 1#'
        ]
    );
    $wp_customize->add_setting(
        'oagency_carousel_insert_2',
        []
    );

    $wp_customize->add_control(
        'oagency_carousel_insert_2',
        [
            'type' => 'dropdown-pages',
            'section' => 'oagency_carousel',
            'label' => 'Slide 2#',
            'description' => 'Select a page for the slide 2#'
        ]
    );
    $wp_customize->add_setting(
        'oagency_carousel_insert_3',
        []
    );

    $wp_customize->add_control(
        'oagency_carousel_insert_3',
        [
            'type' => 'dropdown-pages',
            'section' => 'oagency_carousel',
            'label' => 'Slide 3#',
            'description' => 'Select a page for the slide 3#'
        ]
    );

    $wp_customize->add_setting(
        'oagency_carousel_interval',
        [
            'default' => 1000
        ]
    );

    $wp_customize->add_control(
        'oagency_carousel_interval',
        [
            'type' => 'textarea',
            'section' => 'oagency_carousel',
            'label' => 'Interval between 2 slides (ms)'
        ]
        );


}