<?php get_header(); ?>


<?php



if (have_posts()) : while (have_posts()) : the_post(); ?>

        <?php

        // on charge le template part correspondant à la banner
        get_template_part('template-parts/post-detail'); 
        get_sidebar(); ?>
       
<?php endwhile;
endif; ?>

<?php get_template_part('template-parts/details');
        get_footer(); ?>