<header class="banner">
  <nav class="navbar navbar-expand-lg navbar-light bg-light nav-primary">
    <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <?php
    if (has_nav_menu('primary_navigation')) :
      wp_nav_menu([
          'theme_location' => 'primary_navigation',
          'depth'				=> 2,
          'menu_class' => 'navbar-nav mr-auto',
          'container_class' => 'collapse navbar-collapse',
          'container_id' => 'navbarSupportedContent',
          'fallback_cb'		=> 'WP_Bootstrap_Navwalker::fallback',
          'walker' => new WP_Bootstrap_Navwalker()
        ]);
    endif;
    ?>
  </nav>
</header>
