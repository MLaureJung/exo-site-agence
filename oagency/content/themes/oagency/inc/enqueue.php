<?php



if (!function_exists('oprofile_enqueue')) {

    function oprofile_enqueue() {

        wp_enqueue_style(
            'main-style',
            get_theme_file_uri('public/css/style.css'),
            [],
            '1.0'
        );

        wp_enqueue_style(
            'bootstrap',
            "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css",
            []
            
        );

        wp_enqueue_script(
            'app',
            get_theme_file_uri('public/js/app.js'),
            [],
            '1.0',
            true
        );

        wp_enqueue_script(
            'jarallax',
            "https://unpkg.com/jarallax@1.10/dist/jarallax.min.js",
            [],
            '1.0',
            true
        );

        wp_enqueue_script(
            'popper',
            "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js",
            [],
            '1.0',
            true
        );

        wp_enqueue_script(
            'jquerybootstrap',
            "https://code.jquery.com/jquery-3.4.1.slim.min.js",
            [],
            '1.0',
            true
        );

        wp_enqueue_script(
            'bootstrap js',
            "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js",
            [],
            '1.0',
            true
        );


    }

}

add_action('wp_enqueue_scripts', 'oprofile_enqueue');