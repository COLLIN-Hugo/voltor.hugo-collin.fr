<?php
get_header();
?>

<div class="login-container">
    <h2><?php _e('Connexion', 'text-domain'); ?></h2>
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
    ?>

    <form method="post" action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>">
        <p>
            <label for="username"><?php _e('Nom d\'utilisateur', 'text-domain'); ?></label>
            <input type="text" name="log" id="username" required>
        </p>
        <p>
            <label for="password"><?php _e('Mot de passe', 'text-domain'); ?></label>
            <input type="password" name="pwd" id="password" required>
        </p>
        <p>
            <input type="submit" value="<?php _e('Se connecter', 'text-domain'); ?>">
        </p>
    </form>
</div>

<?php
get_footer();
?>
