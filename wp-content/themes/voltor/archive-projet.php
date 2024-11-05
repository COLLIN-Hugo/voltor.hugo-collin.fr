<?php get_header(); ?>
    <div class="main content-container">
    <div class="article-entry">
        <h1 class="article-title">Les projets</h1> 
    </div>
<div class="card">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
        <a href="<?php the_permalink(); ?>">
            <article>
            <div class="projet">
                <div class="projet-thumbnail">
                    <?php the_post_thumbnail('large'); ?>
                </div>
                <h2 class="projet-title">
                    <?php the_title(); ?>
                </h2>
                <div class="projet-content">
                    <?php the_content(); ?>
                </div>
            </div>
            </article>
        </a>
        <?php endwhile; ?>
    <?php endif; ?>
</div>
    </div>
<?php get_footer(); ?>
