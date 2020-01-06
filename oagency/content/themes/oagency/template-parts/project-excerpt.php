
<div class="project-insight">
    <div class="project-insight__image" style="background-image:url('<?php the_post_thumbnail_url(); ?>'); background-size: cover; background-position: center">
    </div>
    <div class="project-insight__title">
    <h2><?php the_title(); ?></h2>
    </div>
    <div class="project-insight__content">
    <p><?php the_excerpt(); ?></p>
    </div>
    <div class="project-insight__read">
    <h3>
        <a href="<?php the_permalink(); ?>">Lire la suite</a>
    </h3>
    </div>
</div>
