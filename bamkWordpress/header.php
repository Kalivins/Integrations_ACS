<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset=<?php bloginfo('charset'); ?>>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
<header class="page">
    <?php get_sidebar(); ?>

  <div class="jumbotron-fluid">
    <div class="container">
      <div class="row justify-content-center">
        <h2><?php wp_title(''); ?></h2>
      </div>
    </div>
  </div>
</header>
