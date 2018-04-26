<?php get_header(); ?>

<div class="container">
  <div class="row voleur">
    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
      <img class="img-fluid" src="<?php $imagem=get_field('image_du_produit');
      echo $imagem['url']; ?>" alt="">
    </div>
    <div class="col-12 col-sm-12 col-md-5 offset-md-1 col-lg-5 offset-lg-1 guerrier">
      <h2><?php the_field('marque'); ?></h2>
      <p><?php echo $post->post_content; ?></p>
      <h3><?php the_field('prix');
      the_field('devise'); ?></h3>
    </div>
  </div>
</div>

<?php get_footer(); ?>
