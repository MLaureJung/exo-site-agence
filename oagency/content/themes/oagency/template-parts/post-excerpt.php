<div class="grid-item">
    <div class="grid-item__image">
    <img src="<?php the_post_thumbnail_url(); ?>" alt="neige" style="width:200px">
    </div>
    <div class="grid-item__title">
    <h2><?php the_title(); ?></h2>
    </div>
    <div class="grid-item__content">
    <?php the_excerpt(); ?>    
    </div>
    <div class="grid-item__read">
    <h3>
        <a href="<?php the_permalink(); ?>">Lire - <?php the_title(); ?></a>
    </h3>
    </div>
</div>