<?php get_header(); ?>
<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
      <article class="single-project-card">
          <div class="match-image">
              <?php the_post_thumbnail('large'); ?>
          </div>
          <h1 class="single-project-title"><?php the_title(); ?></h1>
          <hr class="section-separator">
          
          <h2 class="section-title">Description</h2>
          <div class="single-project-description">
              <?php the_content(); ?>
          </div>

          <a href="<?php echo get_post_type_archive_link('projet'); ?>" class="return-to-projects-link">Retour aux projets</a>
      </article>
  <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
