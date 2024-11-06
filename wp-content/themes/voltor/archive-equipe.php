<?php get_header(); ?>
<div class="main content-container">
    <div class="article-entry">
        <h1 class="article-title">Les équipes</h1> 
        <p>Toutes les équipes inscrites sur le <a href="#" style="color: #2086FF;">tournoi</a> !</p>
    </div>

    <div class="equipes">
        <?php if (have_posts()): ?>
            <?php while (have_posts()): the_post(); ?>
                <article class="equipe">
                    <a href="<?php the_permalink(); ?>">
                        <h1 class="title"><?php the_title(); ?></h1>
                        <hr class="separator">
                        <?php the_post_thumbnail('large'); ?>
                        <div class="etudiant">
                            <?php 
                            for ($i = 1; $i <= 3; $i++) :
                                $user = get_field("etudiant_$i");
                                if ($user): ?>
                                    <ul>
                                        <li><?php echo esc_html($user['display_name']); ?></li>
                                    </ul>
                                <?php endif;
                            endfor; 
                            ?>

                            <?php 
                            $featured_posts = get_field('choix_du_projets');
                            
                            if ($featured_posts): ?> 
                                <ul>
                                    <?php foreach ($featured_posts as $post) {
                                        $title = get_the_title($post->ID);
                                        $permalink = get_permalink($post->ID);
                                        
                                        echo '<li><a href="' . esc_url($permalink) . '">' . esc_html($title) . '</a></li>';
                                    }
                                    wp_reset_postdata();
                                    ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                    </a>
                </article>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>

    <div class="button-container">
        <a href="#creer-equipe">Créer / Rejoindre une équipe</a>
    </div>
</div>
<?php get_footer(); ?>
