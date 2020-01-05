<?php


function oagency_call($wp_customize)
{
    $wp_customize->add_setting(
        'oagency_call_active',
        []
    );

    $wp_customize->add_control(
        'oagency_call_active',
        [
            'type' => 'checkbox',
            'section' => 'oagency_call',
            'label' => 'Activate Call to action'
        ]
    );

    $wp_customize->add_setting(
        'oagency_call_title',
        [
            'default' => 'Hello'
        ]
    );

    $wp_customize->add_control(
        'oagency_call_title',
        [
            'type' => 'textarea',
            'section' => 'oagency_call',
            'label' => 'Title'
        ]
    );

    $wp_customize->add_setting(
        'oagency_call_content',
        [
            'default' => 'Call to action etc etc etc ...'
        ]
    );

    $wp_customize->add_control(
        'oagency_call_content',
        [
            'type' => 'textarea',
            'section' => 'oagency_call',
            'label' => 'Content'
        ]
    );

    $wp_customize->add_setting(
        'oagency_call_text_btn_1',
        [
            'default' => 'Button click'
        ]
    );

    $wp_customize->add_control(
        'oagency_call_text_btn_1',
        [
            'type' => 'textarea',
            'section' => 'oagency_call',
            'label' => 'Text btn #1'
        ]
    );

    $wp_customize->add_setting(
        'oagency_call_link_btn_1',
        [
            'default' => '#'
        ]
    );

    $wp_customize->add_control(
        'oagency_call_link_btn_1',
        [
            'type' => 'textarea',
            'section' => 'oagency_call',
            'label' => 'Link btn #2'
        ]
    );

    $wp_customize->add_setting(
        'oagency_call_text_btn_2',
        [
            'default' => 'Another button'
        ]
    );

    $wp_customize->add_control(
        'oagency_call_text_btn_2',
        [
            'type' => 'textarea',
            'section' => 'oagency_call',
            'label' => 'Text btn #2'
        ]
    );

    $wp_customize->add_setting(
        'oagency_call_link_btn_2',
        [
            'default' => '#'
        ]
    );

    $wp_customize->add_control(
        'oagency_call_link_btn_2',
        [
            'type' => 'textarea',
            'section' => 'oagency_call',
            'label' => 'Link btn #2'
        ]
    );

    $wp_customize->add_setting(
        'oagency_call_image',
        [
            'type'                  =>  'theme_mod',
            'capability'            =>  'edit_theme_options',
            'theme_supports'        =>  '',
            'default' => get_template_directory_uri().'/app/assets/images/arbre.jpg',
            'sanitize_callback'     =>  '',
            'sanitize_js_callback'  =>  '',
            'transport'             =>  'refresh'
        ]
    );

    $wp_customize->add_control(
        new WP_customize_Image_Control($wp_customize,
        'oagency_call_image',
        [
            'label' => 'Upload a background image',
            'section' => 'oagency_call',
            'settings' =>  'oagency_call_image',
            'context' =>  'oagency_call_image'
        ]
        )
    );
}
