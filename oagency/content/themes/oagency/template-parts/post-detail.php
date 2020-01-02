<section class="article">
      <div class="article__title">
        <h2><?php the_title(); ?></h2>
        <h3>écrit pas <?php the_author(); ?></h3>
      </div>
      <div class="article__image">
          <img src="<?php the_post_thumbnail_url(); ?>" alt="neige">
      </div>
      <div class="article__content">
        <?php the_content(); ?>
      </div>
      <div class="article__views">
          <div class="article__views__count">0</div>
          <div class="article__views__lectures">lecture(s)</div>
      </div>
    </section>
    
    