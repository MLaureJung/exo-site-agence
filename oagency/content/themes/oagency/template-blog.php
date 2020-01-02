<?php
/*
Template Name: Template blog
*/
?>

<?php get_header(); ?>

<?php 
    $args = [
    'post_type' => 'post',
    'posts_per_page' => 6
    //...
];

$query = new WP_Query($args); ?>

    <section class="archive__articles"  >
    
        <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

        <section class="article">
                <div class="article__title">
                    <h2><?php the_title(); ?></h2>
                    <h3>écrit par <?php the_author(); ?></h3>
                </div>
                <div class="article__image">
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="neige">
                </div>
                <div class="article__content">
                    <?php the_excerpt(); ?>
                </div>
                <h3>
                    <a href="<?php the_permalink(); ?>">Lire - <?php the_title(); ?></a>
                </h3>
            </section>
           
        <?php endwhile;
        endif; ?>
           
    </section>
<?php get_sidebar(); 
get_template_part('template-parts/details');
get_footer(); ?>
