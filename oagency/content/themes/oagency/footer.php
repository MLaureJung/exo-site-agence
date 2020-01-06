</main>
  <footer class="nav__footer" style="background-color:<?php echo get_theme_mod('oagency_colors_bgcolor');?>;">
    <!-- <div class="nav__footer__buttons"> -->
    <?php
    
    $menu = wp_nav_menu([
        'theme_location' => 'footer-nav', 
        'container' => 'nav', 
        'container_class' => 'nav__footer__buttons', 
        'add_li_class' => 'btn btn_link',
        'echo' => false 
    ]);

   
    $menu = str_replace('class="menu"', 'class="nav__footer__buttons"', $menu);
   

    echo $menu;

    ?>

        <!-- <button type="button" class="btn btn-link">Contactez-nous</button>
        <button type="button" class="btn btn-link">Sunlight</button>
    </div> -->
    <div class="nav__footer__copyright">
      <h3 style="margin-left:100px"><?php echo get_theme_mod('oagency_footer_text'); ?></h3>
    </div>
  </footer>

  
  
<?php wp_footer(); ?>

 

</body>
</html>
