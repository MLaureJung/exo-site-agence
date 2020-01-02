<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <?php wp_head(); ?>

</head>
<body>
  <header>
    <nav class="nav-header">
      <div class="nav-header__title">
        <h1><?php bloginfo('name'); ?></h1>
      </div>

        <?php

    $menu = wp_nav_menu([
        'theme_location' => 'header-nav', // identifiant de l'emplacement de menu (déclaré dans functions.php)
        'container' => 'nav', // on souhaite une <nav> comme container (par défaut -> <div>)
        'container_class' => 'nav-header__list', 
        'echo' => false // on ne souhaite pas afficher le menu (son code HTML), mais seulement le retourner
    ]);

   
    $menu = str_replace('class="menu"', 'class="nav-header__list"', $menu);

    echo $menu;

    ?>
      
    </nav>
  </header>
  <main class="wrapper">