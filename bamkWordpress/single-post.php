<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center contarticle">
      <p>le <?php echo the_time('l j F Y'); ?></p>
      <p><?php echo $post->post_content; ?></p>
    </div>
  </div>
</div>

<?php get_footer(); ?>