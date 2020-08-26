<div class="nav-wrapper">

  <nav class="nav">
    <div class="nav__logo">
      <img src="<?php echo get_template_directory_uri(); ?>/images/nav-logo.png" srcset="<?php echo get_template_directory_uri();?>/images/nav-logo@2x.png 2x,
             <?php echo get_template_directory_uri(); ?>/images/nav-logo@3x.png 3x" class="Symbolwork_Web">

    </div>

    <?php 
        wp_nav_menu( array(
            'menu' => 'navigation', 
            'menu_class' => 'nav__menu',
            'container' => "",
        ) );
   ?>

  </nav>
</div>