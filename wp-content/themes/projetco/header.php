<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php the_title(); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <div class="wrap">
      <header>
        <h2><?php bloginfo('description'); ?></h2>

        <nav class="main-navigation">
          <?php 
            wp_nav_menu(array(
              'theme_location' => 'header-menu', 
              'container' => 'ul', 
              'menu_class' => 'menu'
            )); 
          ?>
        </nav>

        <div class="login-logout-btn">
          <?php if (is_user_logged_in()) : ?>
            <a href="<?php echo wp_logout_url(); ?>" class="logout-button">
              <?php _e('Déconnexion', 'text-domain'); ?>
            </a>
          <?php else : ?>
            <a href="<?php echo wp_login_url(); ?>" class="login-button">
              <?php _e('Connexion', 'text-domain'); ?>
            </a>
          <?php endif; ?>
        </div>
      </header>
    </div>
    <?php wp_footer(); ?>
  </body>
</html>


