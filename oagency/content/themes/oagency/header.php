<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>oAgency</title>
  
  <?php wp_head(); ?>

</head>
<body>
  <header>
    <nav class="nav-header">
      <div class="nav-header__title">
        <h1><?php bloginfo('name'); ?></h1>
      </div>
      <div class="nav-header__list">
        <ul>
          <li><a href="index.html">Homepage</a></li>
          <li><a href="template-archive-cpt.html">Projets</a></li>
          <li><a href="page-generique.html">Générique</a></li>
          <li><a href="page-siteweb.html">Site web</a></li>
          <li><a href="template-archive-article.html">Blog</a></li>
        </ul>
      </div>
    </nav>
  </header>
  <main class="wrapper">