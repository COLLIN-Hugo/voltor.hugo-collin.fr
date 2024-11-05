<footer>
  <div class="footer-menu-section">
    <h3>Menu</h3>
    <nav><?php
      wp_nav_menu( array (
        'theme_location' => 'footer-menu',
        'container' => 'ul',
        'menu_class' => 'footer-menu'
      ) ); 
    ?></nav>
  </div>
  <div class="newsletter-section">
    <p>Abonnez-vous à notre newsletter pour rester à jour avec nos dernières actualités :</p>
    <form action="#" method="post">
      <input type="email" name="email" placeholder="Votre email" required>
      <button type="submit">S'inscrire</button>
    </form>
  </div>

  <div class="footer-bottom">
    <div class="footer-left">
      <p>&copy; 2024 <?php bloginfo('name'); ?>. Tous droits réservés. <a href="http://localhost:8888/projetco/wp-admin/post.php?post=3&action=edit">Politique de confidentialité</a></p>
    </div>
    <div class="footer-right">
      <p><?php bloginfo('name'); ?> est propulsé par <a href="https://wordpress.org">WordPress</a>.</p>
    </div>
  </div>
</footer>
