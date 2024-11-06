<?php
/* Template Name: Connexion */
get_header();
?>

<div class="login-container">
    <h1 class="article-title"><?php _e('Redeviens un gamer', 'text-domain'); ?></h1>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = sanitize_user($_POST['log']);
        $password = sanitize_text_field($_POST['pwd']);

        $creds = array(
            'user_login' => $username,
            'user_password' => $password,
            'remember' => true,
        );

        $user = wp_signon($creds, false);
        if (is_wp_error($user)) {
            echo '<p class="error">' . $user->get_error_message() . '</p>';
        } else {
            wp_redirect(home_url());
            exit;
        }
    }


    $legal_page = get_page_by_title('Informations légales');
    $registration_page = get_page_by_title('Inscription');
    $legal_url = $legal_page ? get_permalink($legal_page->ID) : '#';
    $registration_url = $registration_page ? get_permalink($registration_page->ID) : '#';
    ?>

    <form method="post" action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>">
        <p>
            <label for="username"><?php _e('Email', 'text-domain'); ?></label>
            <input type="text" name="log" id="username" required>
        </p>
        <p>
            <label for="password"><?php _e('Mot de passe', 'text-domain'); ?></label>
            <input type="password" name="pwd" id="password" required>
        </p>
        <p class="terms">
            <input type="checkbox" id="terms" required>
            <label for="terms">
                <?php _e("En rejoignant Voltor, tu acceptes nos <a href='" . esc_url($legal_url) . "'>conditions d'utilisation</a> et notre <a href='" . esc_url($legal_url) . "'>politique de confidentialité</a>", 'text-domain'); ?>
            </label>
        </p>
        <p class="login-link">
            <?php _e("Tu n'as pas de compte ? <a href='" . esc_url($registration_url) . "'>S'inscrire</a>", 'text-domain'); ?>
        </p>
        <p>
            <input type="submit" value="<?php _e('Se connecter', 'text-domain'); ?>" class="login-submit">
        </p>
    </form>
</div>

<?php
get_footer();
?>

