
<?php get_header(); ?>
    
<?php if (get_theme_mod('oagency_carousel_active')): ?>

  <section class="slider">
    <div id="carouselExampleSlidesOnly" class="carousel slide"  data-ride="carousel">
      <div class="carousel-inner">
       

        <?php

        $array_id = array (
          get_theme_mod('oagency_carousel_insert_1'),
          get_theme_mod('oagency_carousel_insert_2'),
          get_theme_mod('oagency_carousel_insert_3')
        );

        // var_dump(get_theme_mod('oagency_carousel_insert_3'));

        $args = [
          'post_type' => 'page',
          'post__in' => $array_id
        ];
        

        $wp_query = new WP_Query($args);

        $i = 0;
        
        if ($wp_query->have_posts()) :while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

        <div class="carousel-item <?php if ($i == 0) {
          echo 'active'; } ?>" style="background-image:url('<?php the_post_thumbnail_url(); ?>'); background-size:cover; background-repeat: no-repeat; background-position: center center; height:700px" data-interval="<?php echo get_theme_mod('oagency_carousel_interval'); ?>" data-pause="hover">

          <?php get_template_part('template-parts/banner'); ?>

        </div>

        <?php $i++;

         endwhile; endif; ?>
        
      </div>
    </div>
  </section>
<?php endif; ?>
      
        <section class="actu">
          <div class="actu__header">
            <div class="actu__title">
              <h2>Nos actualités</h2>
            </div>
            <div class="actu__description">
              <p>Découvrez nos ernières actualités lorem ipsum dolor sit amet</p>
            </div>
            <div class="actu__link">
              <h4>
                <a href="#">Actualités </a>
              </h4>
            </div>
          </div>
          
          <div class="actu__posts">
            <div class="grid">
            
            <?php $args = [
            //'post_type' => 'post',
            'posts_per_page' => 6,
            'orderby' => 'rand',
            'order' => 'DESC',
        ];

        $wpqueryArticles = new WP_Query($args);

        ?>

        <?php if ($wpqueryArticles->have_posts()) : while ($wpqueryArticles->have_posts()) : $wpqueryArticles->the_post(); ?>
               
                <!-- // pour chaque article, on charge le template post-excerpt -->
                <?php get_template_part('template-parts/post-excerpt'); ?>

        <?php endwhile;
        endif; ?>
          
              
             </div>
          </div>
        </section>
        <section data-jarallax data-speed="0.2" class="jarallax" >
    
            <?php get_template_part('template-parts/call-to-action'); ?>
    
        </section>
        
    
        <?php get_template_part('template-parts/details'); ?>
          
       
     <?php get_footer(); ?>