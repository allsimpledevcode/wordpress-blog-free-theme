<?php 
  get_header(); 
?>
<!-- Sidebar -->
<main>
  <?php get_sidebar(); ?>
  <!-- Main content -->
  <section class="blg-main-content" id="main">
    <?php
    if (have_posts()) : while (have_posts()) : the_post();
        get_template_part('content', get_post_format());
      endwhile;
      get_template_part('content', 'pagination');
    else : ?>

      <h1>No blogs found</h1>

    <?php endif; ?>
  </section>
</main>
<?php get_footer(); ?>