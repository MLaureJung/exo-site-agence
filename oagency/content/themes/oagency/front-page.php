
<?php get_header(); ?>
    
    <?php get_template_part('template-parts/banner'); ?>
      
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
                
            <?php get_template_part('template-parts/post-excerpt'); ?>
              
             </div>
          </div>
        </section>
        <section data-jarallax data-speed="0.2" class="jarallax" >
    
            <?php get_template_part('template-parts/call-to-action'); ?>
    
        </section>
        
    
        <?php get_template_part('template-parts/details'); ?>
          
       
     <?php get_footer(); ?>