<?php


function oagency_posts($wp_customize) 
{
    $wp_customize->add_setting(
        'oagency_posts_active',
        []
    );

    $wp_customize->add_control(
        'oagency_posts_active',
        [
            'type' => 'checkbox',
            'section' => 'oagency_posts',
            'label' => 'Activate posts section',
            'description' => 'Permet de masquer ou afficher les posts'
        ]
    );

    $wp_customize->add_setting(
        'oagency_posts_title',
        [
            'default' => 'Nos actualités'
        ]
    );

    $wp_customize->add_control(
        'oagency_posts_title',
        [
            'type' => 'textarea',
            'section' => 'oagency_posts',
            'label' => 'Title'
        ]
    );

    $wp_customize->add_setting(
        'oagency_posts_content',
        [
            'default' => 'Découvrez nos dernières actus..'
        ]
    );

    $wp_customize->add_control(
        'oagency_posts_content',
        [
            'type' => 'textarea',
            'section' => 'oagency_posts',
            'label' => 'Content'
        ]
    );

    $wp_customize->add_setting(
        'oagency_posts_category',
        [
            'default' => 'Actualités'
        ]
        );

      
    $all_post_categories = get_categories();

        foreach ($all_post_categories as $post_category) {
        $array_choices[$post_category->slug] = $post_category->name;
    }

    $wp_customize->add_control(
        'oagency_posts_category',
        [
            'type' => 'select',
            'choices' => $array_choices,
            'section' => 'oagency_posts',
            'label' => 'Select category'
        ]
    );

    $wp_customize->add_setting(
        'oagency_posts_count',
        [
            'default' => -1
        ]
    );

    $wp_customize->add_control(
        'oagency_posts_count',
        [
            'type' => 'number',
            'section' => 'oagency_posts',
            'label' => "Num"
        ]
    );
}
