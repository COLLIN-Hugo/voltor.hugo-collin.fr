<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <article class="team-card">
            <?php the_post_thumbnail('large'); ?>
            <h1 class="team-card-title"><?php the_title(); ?></h1>
            <div class="student-list">
                <ul>
                    <?php
                    for ($i = 1; $i <= 4; $i++) {
                        $user = get_field("etudiant_" . $i);
                        if ($user) {
                            echo '<li>' . esc_html($user['display_name']) . '</li>';
                        }
                    }
                    ?>
                </ul>
                <?php
                $featured_posts = get_field('choix_du_projets'); 
                if ($featured_posts) : ?>
                    <h2>Associated Projects</h2>
                    <ul>
                        <?php foreach ($featured_posts as $post) :
                            setup_postdata($post); ?>
                            <li>
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                    <?php 
                    wp_reset_postdata(); 
                endif; ?>
            </div>
        </article> 
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
