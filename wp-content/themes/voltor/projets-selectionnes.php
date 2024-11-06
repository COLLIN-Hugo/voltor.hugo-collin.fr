<?php get_header(); ?>
<section class="projet-list">
    <?php
    // Récupérer les projets
    $projets = new WP_Query(array(
        'post_type' => 'projet',
        'posts_per_page' => -1,
    ));

    if ($projets->have_posts()) :
        while ($projets->have_posts()) : $projets->the_post();
            $titre_match = get_field('titre'); // Récupérer le titre du match
            $date_match = get_field('date_et_heure'); // Récupérer la date et l'heure du match
            $equipe1 = get_field('equipe_1'); 
            $equipe2 = get_field('equipe_2');
                        
            if ($equipe1 && is_array($equipe1) && isset($equipe1[0]) && $equipe2 && is_array($equipe2) && isset($equipe2[0])) {
                // Récupérer les IDs des équipes (en prenant le premier élément du tableau)
                $equipe1_id = $equipe1[0]->ID;
                $equipe2_id = $equipe2[0]->ID;

                $image_equipe1 = get_field('logo', $equipe1_id);
                $image_equipe2 = get_field('logo', $equipe2_id);
                            

                $nom_equipe1 = $equipe1[0]->post_title;
                $nom_equipe2 = $equipe2[0]->post_title;
                ?>
                <div class="single-project-card">
                    <div class="match-card-header">
                        <span class="match-date"><?php echo esc_html($date_match); ?>H</span>
                    </div>
                    <div class="match-card-body">
                        <div class="team team-1">
                            <div class="team-logo">
                                <?php if ($image_equipe1) : ?>
                                    <img src="<?php echo esc_url($image_equipe1['url']); ?>" alt="<?php echo esc_attr($nom_equipe1); ?>" />
                                <?php endif; ?>
                            </div>
                            <p class="team-name"><?php echo $nom_equipe1; ?></p>
                        </div>

                        <p class="vs-text">VS</p>

                        <div class="team team-2">
                            <div class="team-logo">
                                <?php if ($image_equipe2) : ?>
                                    <img src="<?php echo esc_url($image_equipe2['url']); ?>" alt="<?php echo esc_attr($nom_equipe2); ?>" />
                                <?php endif; ?>
                            </div>
                            <p class="team-name"><?php echo $nom_equipe2; ?></p>
                        </div>
                    </div>
                </div>
            <?php
            }
        endwhile;
        wp_reset_postdata();
    else :
        echo '<p>Aucun projet trouvé.</p>';
    endif;
    ?>
</section>

<?php get_footer(); ?>
