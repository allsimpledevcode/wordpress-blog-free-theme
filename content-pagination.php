<nav class="blg-pagination">
  <?php
    previous_posts_link( '« Newer posts' );
    next_posts_link( 'Older posts »', $query->max_num_pages );
  ?>
</nav>