<!DOCTYPE html>
<html>
<head>
  <meta charset=<?php bloginfo('charset'); ?>>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php /* Template Name: Home */ wp_head(); ?>
  <title><?php wp_title(); ?></title>
</head>
<body <?php body_class(); ?> >
  <header class="home">

    <?php get_sidebar(); ?>

    <!-- CLASCO -->
    <div class="jumbotron-fluid">
     <div class="container">
      <div class="row justify-content-center">
       <p class="clasco">CLA<br />SCO</p>
     </div>
   </div>
 </div>
</header>

<!-- Products -->
<main>
 <section class="products">
   <div class="text-center title">
     <p class="grey">Lorem ipsum dolor sit amet</p>
     <h2 class="text-uppercase black">Blanco Products</h2>
     <hr />
   </div>
   <div class="container">
     <nav class="nav justify-content-center filters">
       <span class="underline active"><a href="#" class="nav-link active grey">Featured products</a></span>
       <span class="underline"><a href="#" class="nav-link grey">Popular products</a></span>
       <span class="underline"><a href="#" class="nav-link grey">New arrivales</a></span>
       <span class="underline"><a href="#" class="nav-link grey">Last minute</a></span>
     </nav>
     <div class="liste row justify-content-around">
      <?php echo do_shortcode('[postProducts]'); ?>
    </div>
  </div>
</section>

<!-- Features -->
<section class="features">
 <div class="container">
   <div class="title">
     <p class="grey">Lorem ipsum dolor sit amet</p>
     <h2 class="text-uppercase black">Check more Blanco Features</h2>
   </div>
   <div class="more-details row justify-content-end">
    <hr />
    <button class="text-uppercase">More details</button>
  </div>
  <p class="grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris .</p>
</div>
</section>

<!-- Latest_blog -->
<section class="latest_blog">
 <div class="container">
  <div class="title text-center">
   <p class="grey">Lorem ipsum dolor sit amet</p>
   <h2 class="text-uppercase black">Latest from the blog</h2>
   <hr />
 </div>
 <p class="grey text-center">
   Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris .
 </p>
 <div class="row justify-content-around">

  <?php

  function custom_excerpt_length( $length ) {
    return 10;
  }
  add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

  $args = array( 'post_type' => '', 'posts_per_page' => 4 );
  $loop = new WP_Query( $args );
  while ( $loop->have_posts() ) : $loop->the_post();

    echo '<article class="card col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
    <header class="d-flex justify-content-center">';
    if( has_post_thumbnail() ) {
      the_post_thumbnail();
    } else {
     echo '<a href="'.get_the_permalink().'"><img src="' . get_bloginfo('template_directory') . '/img/img_base.svg" alt="" />';
   }
   echo'</header>
   <div class="card-body">
   <p class="card-text"><span class="titre_article black text-uppercase">'.get_the_title().'</span><br />
   <span class="grey text-uppercase details_article">'.get_the_time('m-d-y').'    /    '.get_the_category().'    /    By '.get_the_author().'</span><br/>
   <span class="description grey">'.get_the_excerpt().'</span></p></a>
   </div>
   </article>';




 endwhile;

 ?>

</div>
</div>
</section>
</main>
<?php get_footer() ?>
