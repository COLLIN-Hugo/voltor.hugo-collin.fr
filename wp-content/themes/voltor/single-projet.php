<?php get_header(); ?>
<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
      <article class="card-competition">
          <h1 class="title-competition"><?php the_title(); ?></h1>
          <hr class="separator-competition">

          <div class="image-competition">
              <?php the_post_thumbnail('large'); ?>
          </div>

          <h1 class="title-competition">Description</h1>
          <hr class="separator-competition">
          <div class="description-competition">
              <?php 
              $description = get_field('description'); 
              if ($description) {
                  echo wp_kses_post($description);
              } else {
                  echo "<p>Aucune description disponible.</p>";
              }
              ?>
          </div>
      </article>
  <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
