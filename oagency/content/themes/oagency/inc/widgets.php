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

// class My_Widget extends WP_Widget {

// 	public function __construct() {
// 		$widget_options = array( 
// 			'classname' => 'my_widget',
// 			'description' => 'My widget description',
// 		);
// 		parent::__construct( 'my_widget', 'My Widget', $widget_options );
// 	}

// 	public function widget( $args, $instance ) {
// 		// Affichage du widget
// 	}

// 	public function form( $instance ) {
// 		// Formulaire pour la configuration du Widget
// 	}

// 	public function update( $new_instance, $old_instance ) {
// 		// Processus d'enregistrement des données / options du Widget
// 	}
// }

// function my_widget_loader() {
// 	register_widget( 'My_Widget' );
// }

// add_action( 'widgets_init', 'my_widget_loader' );