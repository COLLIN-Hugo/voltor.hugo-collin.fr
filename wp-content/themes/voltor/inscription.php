<?php
/* Template Name: Inscription */
get_header();
?>

<div class="register-container">
    <h1 class="article-title"><?php _e('Deviens un gamer', 'text-domain'); ?></h1>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = sanitize_user($_POST['username']);
        $email = sanitize_email($_POST['email']);
        $password = sanitize_text_field($_POST['password']);

        $userdata = array(
            'user_login' => $username,
            'user_email' => $email,
            'user_pass' => $password,
            'role' => 'subscriber',
        );

        $user_id = wp_insert_user($userdata);
        if (is_wp_error($user_id)) {
            echo '<p class="error">' . $user_id->get_error_message() . '</p>';
        } else {
            echo '<p class="success">' . __('Inscription réussie ! Vous pouvez maintenant vous connecter.', 'text-domain') . '</p>';
        }
    }
    ?>

    <form method="post" action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>">
        <p>
            <label for="username"><?php _e('Pseudonyme', 'text-domain'); ?></label>
            <input type="text" name="username" id="username" required>
        </p>
        <p>
            <label for="email"><?php _e('Email', 'text-domain'); ?></label>
            <input type="email" name="email" id="email" required>
        </p>
        <p>
            <label for="password"><?php _e('Mot de passe', 'text-domain'); ?></label>
            <input type="password" name="password" id="password" required>
        </p>
        <p class="terms">
            <input type="checkbox" id="terms" required>
            <label for="terms">
                <?php 
                    $legal_page_url = esc_url(get_permalink(get_page_by_path('informations-legales')));
                    _e("En rejoignant Voltor, tu acceptes nos <a href='" . $legal_page_url . "'>conditions d'utilisation</a> et notre <a href='" . $legal_page_url . "'>politique de confidentialité</a>", 'text-domain'); 
                ?>
            </label>
        </p>
        <p class="register-link">
            <?php _e("Déjà inscrit ? <a href='" . esc_url(get_permalink(get_page_by_path('connexion'))) . "'>Se connecter</a>", 'text-domain'); ?>
        </p>
        <p>
            <input type="submit" value="<?php _e("S'inscrire", 'text-domain'); ?>" class="register-submit">
        </p>
    </form>
</div>

<?php
get_footer();
?>
