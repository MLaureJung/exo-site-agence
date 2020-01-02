<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <section class="generique" style="background-image:url('<?php the_post_thumbnail_url(); ?>'); background-repeat:no-repeat; background-position:center;">
    
        <?php the_content(); ?>


    </section>
<?php endwhile;
endif; ?>

<?php get_template_part('template-parts/details'); ?>
<?php get_footer(); ?>