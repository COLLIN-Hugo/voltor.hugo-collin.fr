<?php get_header(); ?>

<div class="main content-container"> <!-- Renommé 'content-page' en 'content-container' -->

  <!-- Boucle WordPress standard pour récupérer le contenu de la page -->
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <div class="article-entry"> <!-- Renommé 'post-entry' en 'article-entry' -->
        <?php the_post_thumbnail('large'); ?>
        <h1 class="article-title"><?php the_title(); ?></h1> <!-- Renommé 'post-title' en 'article-title' -->
        <div class="article-content"> <!-- Renommé 'post-content' en 'article-content' -->
          <?php the_content(); ?>
        </div>
      </div>
    <?php endwhile; ?>
  <?php endif; ?>

    <?php
    // Créer une nouvelle requête pour récupérer les articles du type 'projet'
    $args = array(
        'post_type' => 'projet', // Type de publication personnalisé
        'posts_per_page' => -1,   // Récupérer tous les projets
    );

    $projet = new WP_Query($args);

    // Vérifiez si des projets sont trouvés
    if ($projet->have_posts()) :
        echo '<div class="project-grid">'; // Renommé 'project-listing' en 'project-grid'
        while ($projet->have_posts()) : $projet->the_post();

            // Affiche le projet
            echo '<div class="single-project-card">'; // Renommé 'project-item' en 'single-project-card'
            echo '<div class="project-thumbnail">'; // Renommé 'projet-thumbnail' en 'project-thumbnail'
            the_post_thumbnail('medium'); // Afficher l'image du projet
            echo '</div>';
            echo '<h3 class="project-title">' . get_the_title() . '</h3>'; // Renommé 'projet-title' en 'project-title'

            // Récupère les équipes associées via ACF
            $associated_teams = get_posts(array(
                'post_type' => 'equipe', // Remplace par le post type de tes équipes
                'meta_query' => array(
                    array(
                        'key' => 'projet', // Nom du champ ACF dans les équipes
                        'value' => '"' . get_the_ID() . '"', // Recherche l'ID du projet
                        'compare' => 'LIKE'
                    )
                )
            ));

            if ($associated_teams) :
                echo '<div class="associated-team-list">'; // Renommé 'team-listing' en 'associated-team-list'
                foreach ($associated_teams as $post) {
                    setup_postdata($post);
                    ?>
                    <div class="associated-team-card"> <!-- Renommé 'team-card' en 'associated-team-card' -->
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </div>
                    <?php
                }
                wp_reset_postdata(); // Réinitialiser les données
                echo '</div>'; // Ferme la liste des équipes
            else :
                echo '<p>Aucune équipe n\'a sélectionné ce projet.</p>';
            endif;

            echo '</div>';

        endwhile;
        echo '</div>';

        wp_reset_postdata();

    else :
        echo '<p>Aucun projet trouvé.</p>';
    endif;
    ?>
  </div>
</div>

<?php get_footer(); ?>
