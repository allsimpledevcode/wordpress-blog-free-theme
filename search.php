<?php get_header(); ?>
<!-- Sidebar -->
<main>
  <?php get_sidebar(); ?>
  <!-- Main content -->
  <section class="blg-main-content">
    <div class="blg-search-word">
      <h2>Searched keyword: <span><?php echo get_search_query(); ?></span></h2>
    </div>
    <?php
    if (have_posts()) : while (have_posts()) : the_post();
        get_template_part('content', get_post_format());
      endwhile;
      get_template_part('content', 'pagination');
    ?>
    <?php else : ?>
      <h1>No blogs found</h1>
    <?php endif; ?>
  </section>
</main>
<?php get_footer(); ?>