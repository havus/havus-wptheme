<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <script src="assets/js/bootstrap.min.js"></script> 
  <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Montserrat:600|Raleway:400i,500i&display=swap" rel="stylesheet"> 
  <title> <?php bloginfo('name'); ?> </title>
  <?php wp_head(); ?>
</head>
<body>

  
  
<header>
  <div class="head">
    <div class="container">
      <a href="<?= home_url(); ?>">
        <img src="<?= home_url(); ?>/wp-content/themes/havustheme/assets/img/circle-logo.png" alt="logo">
      </a>
      <h1><?php bloginfo('name'); ?></h1>
      <button class="btn btn-primary">LOGIN</button>
    </div>
  </div>
<?php if (is_page()): ?>
<!-- Silence is golden -->
<?php else : ?>
  <div class="desc-head">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <h3>
            <?php bloginfo('description'); ?>
          </h3>
        </div>
        <div class="col-sm-6 search-form">
          <?php get_search_form(); ?>
        </div>
      </div>
    </div>
  </div>
  <nav class="container">
    <?php 
    $args = ['theme_location' => 'main_menu'];
    wp_nav_menu($args);
    ?>
  </nav>
<?php endif; ?>
</header>
