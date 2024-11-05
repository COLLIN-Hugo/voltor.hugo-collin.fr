<?php get_header(); ?>

<div class="main single">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <div class="post">

        <!-- Titre de l'article -->
        <h1 class="post-title"><?php the_title(); ?></h1>

        <!-- Informations sur l'article -->
        <p class="post-info">
          Posté le <?php the_date(); ?> dans <?php the_category(', '); ?> par <?php the_author(); ?>.
        </p>

        <!-- Contenu de l'article -->
        <div class="post-content">
          <?php the_content(); ?>
        </div>

        <!-- Vignette de l'article -->
        <?php if (has_post_thumbnail()) : ?>
          <div class="post-thumbnail">
            <?php the_post_thumbnail('medium'); // 'medium', 'large', ou 'thumbnail' selon tes besoins ?>
          </div>
        <?php endif; ?>

        <!-- Section des commentaires -->
        <div class="post-comments">
          <?php comments_template(); ?>
        </div>

      </div>
    <?php endwhile; ?>
  <?php endif; ?>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>

