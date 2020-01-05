<?php


function oagency_footer($wp_customize)
{
    $wp_customize->add_setting(
        'oagency_footer_active',
        []
    );

    $wp_customize->add_control(
        'oagency_footer_active',
        [
            'type' => 'checkbox',
            'section' => 'oagency_footer',
            'label' => 'Activate Footer'
        ]
    );

    $wp_customize->add_setting(
        'oagency_footer_text',
        [
            'default' => 'oAgency 2019 - Copyright'
        ]
    );

    $wp_customize->add_control(
        'oagency_footer_text',
        [
            'type' => 'textarea',
            'section' => 'oagency_footer',
            'label' => 'Text'
        ]
    );

    $wp_customize->add_setting(
        'oagency_footer_text_color',
        [
            'default' => '#33a570'
        ]
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize, 'oagency_footer_text_color',
            [
                'label' => 'Text color',
                'section' => 'oagency_footer',
                'settings' => 'oagency_footer_text_color',  
            ]
        )
    );
}