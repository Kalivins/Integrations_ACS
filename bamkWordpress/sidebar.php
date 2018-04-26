<?php require_once(get_template_directory() . '/includes/bootstrap-navwalker.php'); ?>

<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container">
    <a class="navbar-brand" id="classico" href="<?php bloginfo('url'); ?>"><?php echo get_bloginfo( 'name' ); ?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <?php
        wp_nav_menu( array(
          'theme_location'  =>  'menu-1',
          'menu_id'         =>  'primary-menu',
          'container'       =>  'div',
          'container_id'    =>  'navbarNavDropdown',
          'container_class' =>  'collapse navbar-collapse justify-content-end',
          'menu_id'         =>  false,
          'menu_class'      =>  'navbar-nav mr-auto',
          'depth'           =>  2,
          'menu_class'      =>  'navbar-nav ml-auto',
          'walker'          =>  new Bootstrap_NavWalker(),
          'fallback_cb'     =>  'Bootstrap_NavWalker::fallback',
        ) );
      ?>
  </div>
</nav>
