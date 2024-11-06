<?php 
// Récupérer la page "Informations légales"
$legal_page = get_page_by_title('Informations légales');
$legal_url = $legal_page ? get_permalink($legal_page->ID) : '#';
?>

<footer>
  <div class="footer-logo">
    <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Le logo de mon site web">
  </div>
  
  <div class="newsletter-section">
    <p>Abonnez-vous à notre newsletter, pour rester à jour :</p>
    <form action="#" method="post">
      <input type="email" name="email" placeholder="Votre email" required>
      <button type="submit">S'inscrire</button>
    </form>
  </div>

  <div class="footer-bottom">
    <p class="rgpd">
      &copy; 2024 Voltor. Tous droits réservés. 
      <?php _e("<a href='" . esc_url($legal_url) . "'>Informations légales</a>", 'text-domain'); ?>
    </p>
  </div>
</footer>
