<div class="blg-post post-list">
  <h1 class="blg-title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h1>

  <div class="blg-content">
    <?php 
      $trimexcerpt = get_the_excerpt();
      $shortexcerpt = wp_trim_words( $trimexcerpt, $num_words = 30, $more = '…' ); 
      echo "<p>" . $shortexcerpt . "</p>";
    ?>
  </div>

  <p class="blg-post-date"><?php the_date(); ?></p>

</div>