<?php
/* Template Name: Profil Utilisateur */
get_header();

// Vérifie si l'utilisateur est connecté
if (is_user_logged_in()) {
    $current_user = wp_get_current_user();
    $user_id = $current_user->ID;
    $display_name = $current_user->display_name;
    $avatar_url = get_avatar_url($user_id, array('size' => 200));
    
    // Exemples de champs personnalisés pour les statistiques (modifiez selon votre configuration)
    $victories = get_user_meta($user_id, 'victories', true) ?: '0';
    $losses = get_user_meta($user_id, 'losses', true) ?: '0';
    $goals = get_user_meta($user_id, 'goals', true) ?: '0';
    $total_matches = get_user_meta($user_id, 'total_matches', true) ?: '0';
    $world_rank = get_user_meta($user_id, 'world_rank', true) ?: 'N/A';
    $joined_year = get_user_meta($user_id, 'joined_year', true) ?: date('Y');
    $team = get_user_meta($user_id, 'team', true) ?: 'Non défini';

    ?>
    <div class="profile-container">
        <!-- Avatar et nom d'utilisateur -->
        <div class="profile-avatar">
            <img src="<?php echo esc_url($avatar_url); ?>" alt="Avatar de <?php echo esc_attr($display_name); ?>">
        </div>
        <h1 class="profile-name"><?php echo esc_html($display_name); ?></h1>
        <p class="profile-rank">Super Légende Supersonique</p>

        <!-- Section Équipe -->
        <h2 class="section-title">Équipe</h2>
        <hr class="section-separator">
        <div class="profile-team">
            <p><?php echo esc_html($team); ?></p>
        </div>

        <!-- Section Statistiques -->
        <h2 class="section-title">Statistiques</h2>
        <hr class="section-separator">
        <div class="profile-stats">
            <div class="stats-item"><span>Victoires :</span> <?php echo esc_html($victories); ?></div>
            <div class="stats-item"><span>Défaites :</span> <?php echo esc_html($losses); ?></div>
            <div class="stats-item"><span>Buts :</span> <?php echo esc_html($goals); ?></div>
            <div class="stats-item"><span>Total de matchs :</span> <?php echo esc_html($total_matches); ?></div>
            <div class="stats-item"><span>Classement mondial :</span> <?php echo esc_html($world_rank); ?></div>
            <div class="stats-item"><span>Joue depuis :</span> <?php echo esc_html($joined_year); ?></div>
        </div>
    </div>
    <?php
} else {
    echo '<p>Veuillez vous connecter pour voir votre profil.</p>';
}

get_footer();
