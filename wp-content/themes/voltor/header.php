<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <title><?php the_title(); ?></title>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div class="wrap">
    <header class="header">
      <div class="header-container">
        <!-- Logo -->
        <a href="<?php echo home_url(); ?>" class="logo">
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo Voltor">
        </a>

        <!-- Menu Burger -->
        <div class="burger-menu" onclick="toggleMenu()">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>

      <!-- Menu Burger Overlay -->
      <nav class="mobile-menu" id="mobile-menu">
        <div class="menu-header">
          <a href="<?php echo home_url(); ?>" class="menu-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo Voltor">
          </a>
          <span class="close-menu" onclick="toggleMenu()">×</span>
        </div>
        
        <!-- Menu dynamique WordPress -->
        <?php
          wp_nav_menu(array(
            'theme_location' => 'menu_principal',
            'menu_class' => 'menu-list',          
            'container' => false                  
          ));
        ?>

        <div class="menu-footer">
        <a href="<?php echo home_url('/connexion'); ?>" class="login-button">Se connecter / S'inscrire</a>
        </div>
      </nav>
    </header>
  </div>

  <?php wp_footer(); ?>
  <script>
    function toggleMenu() {
      document.getElementById('mobile-menu').classList.toggle('active');
    }
  </script>
</body>
</html>
