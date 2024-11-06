<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <article class="team-card">
            <h1 class="team-card-title"><?php the_title(); ?></h1>
            <hr class="section-separator">

            <div class="team-image">
                <?php the_post_thumbnail('large'); ?>
            </div>

            <h1 class="team-card-title">Effectif</h1>
            <hr class="section-separator">
            <div class="student-list">
                <?php
                for ($i = 1; $i <= 3; $i++) { 
                    $user = get_field("etudiant_" . $i);
                    if ($user) {
                        echo '<div class="student-card"><p class="student-name">' . esc_html($user['display_name']) . '</p></div>';
                    }
                }
                ?>
            </div>
            
            <h1 class="team-card-title">Détail</h1>
            <hr class="section-separator">
            <div class="team-details">
                <?php the_field('detail'); ?>
            </div>
        </article> 
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
