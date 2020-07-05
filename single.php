<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <!-- Sidebar -->
    <main>
      <?php get_sidebar(); ?>
      <!-- Main content -->
      <section class="blg-main-content">
        <div class="blg-post">
          <h1 class="blg-title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h1>
          <p class="blg-post-date"><?php the_date(); ?></p>
          <div class="blg-content blg-single-post">
            <?php the_content(); ?>
          </div>

          <nav class="blg-pagination">
            <?php previous_post_link('%link', '« Prev', true); ?>
            <?php next_post_link('%link', 'Next »', true); ?>
          </nav>
        </div>
        <div class="blg-tags">
          <?php the_tags(); ?>
        </div>
      </section>
    </main>
  <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>