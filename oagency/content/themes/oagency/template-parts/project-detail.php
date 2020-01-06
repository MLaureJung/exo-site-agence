<section data-jarallax data-speed="0.2" class="project" style="background-image:url('<?php the_post_thumbnail_url(); ?>')">
    <div class="project__frame">
        <div class="project__frame__image" style="background-image:url('<?php the_post_thumbnail_url(); ?>'); background-size: cover">
            
        </div>
        <div class="project__frame__details">
            <div class="project__frame__title">
                <h2><?php the_title(); ?></h2>
            </div>
            <div class="project__frame__content">
                <?php the_content(); ?>
            </div>
            
        </div>

    </div>
</section>