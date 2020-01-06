<?php
/*
Template Name: Template projects
*/

get_header();

$args = [
    'post_type' => 'project',
    'posts_per_pages' => 5
    //...
];

$query = new WP_Query($args);


echo ' <section class="projects">';
        
if ($query->have_posts()) {
    while ($query->have_posts()) {
        $query->the_post();

        get_template_part('template-parts/project-excerpt');

    }
}

echo '</section>';

get_template_part('template-parts/details');

get_footer();
