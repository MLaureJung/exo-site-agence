<?php


function oagency_colors($wp_customize)
{

    $wp_customize->add_setting(
        'oagency_colors_lkcolor',
        [
            'default' => '#33a570'
        ]
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize, 'oagency_colors_lkcolor',
            [
                'label' => 'Link color',
                'section' => 'oagency_colors',
                'settings' => 'oagency_colors_lkcolor',  
            ]
        )
    );

    $wp_customize->add_setting(
        'oagency_colors_bgcolor',
        [
            'default' => '#757575'
        ]
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize, 'oagency_colors_bgcolor',
            [
                'label' => 'Background color',
                'section' => 'oagency_colors',
                'settings' => 'oagency_colors_bgcolor',  
            ]
        )
    );
}
