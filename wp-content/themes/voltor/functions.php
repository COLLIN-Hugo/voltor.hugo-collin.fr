<?php
function register_my_menus() {
  register_nav_menus(array(
      'menu_principal' => __('Menu Principal')
  ));
}

add_action('init', 'register_my_menus');
?>
