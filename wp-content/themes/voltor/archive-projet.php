<?php get_header(); ?>
<div class="main content-container">
    <div class="article-entry">
        <h1 class="article-title">Les matchs</h1>
        <p>Tous les matchs disponibles <a href="#" style="color: #2086FF;">maintenant</a> !</p>
    </div>

    <?php
    $post_count = 0;

    if (have_posts()) :

        ?>
        <div class="match-stage">
            <h2 class="stage-title">8e de Finale</h2>
            <div class="separator-line"></div>
            <div class="card-container">
                <?php while (have_posts() && $post_count < 8) : the_post(); ?>
                    <a href="<?php the_permalink(); ?>" class="match-card">
                        <div class="match-thumbnail">
                            <?php the_post_thumbnail('large'); ?>
                            <h3 class="match-title"><?php the_title(); ?></h3>
                        </div>
                    </a>
                    <?php $post_count++; ?>
                <?php endwhile; ?>
            </div>
        </div>

        <?php
        $post_count = 0;
        rewind_posts();
        ?>
        <div class="match-stage">
            <h2 class="stage-title">Quarts de Finale</h2>
            <div class="separator-line"></div>
            <div class="card-container">
                <?php while (have_posts() && $post_count < 6) : the_post(); ?>
                    <a href="<?php the_permalink(); ?>" class="match-card">
                        <div class="match-thumbnail">
                            <?php the_post_thumbnail('large'); ?>
                            <h3 class="match-title"><?php the_title(); ?></h3>
                        </div>
                    </a>
                    <?php $post_count++; ?>
                <?php endwhile; ?>
            </div>
        </div>

        <?php
        $post_count = 0;
        rewind_posts();
        ?>
        <div class="match-stage">
            <h2 class="stage-title">Demi Finale</h2>
            <div class="separator-line"></div>
            <div class="card-container">
                <?php while (have_posts() && $post_count < 4) : the_post(); ?>
                    <a href="<?php the_permalink(); ?>" class="match-card">
                        <div class="match-thumbnail">
                            <?php the_post_thumbnail('large'); ?>
                            <h3 class="match-title"><?php the_title(); ?></h3>
                        </div>
                    </a>
                    <?php $post_count++; ?>
                <?php endwhile; ?>
            </div>
        </div>

        <?php
        $post_count = 0;
        rewind_posts();

        ?>
        <div class="match-stage">
            <h2 class="stage-title">Finale</h2>
            <div class="separator-line"></div>
            <div class="card-container">
                <?php while (have_posts() && $post_count < 2) : the_post(); ?>
                    <a href="<?php the_permalink(); ?>" class="match-card">
                        <div class="match-thumbnail">
                            <?php the_post_thumbnail('large'); ?>
                            <h3 class="match-title"><?php the_title(); ?></h3>
                        </div>
                    </a>
                    <?php $post_count++; ?>
                <?php endwhile; ?>
            </div>
        </div>

    <?php endif; ?>
</div>
<?php get_footer(); ?>
