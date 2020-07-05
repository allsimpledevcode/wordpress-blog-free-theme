<aside class="blg-sidenav" id="blg-sidenav">
  <button onclick="toggleMenu('close')" class="blg-mb-icon"><img src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/close.svg"/></button></button>
  <div class="blg-brand">
    <img src="https://i.pravatar.cc/400?img=12" alt="Avatar" />
    <a href="<?php echo get_home_url(); ?>" class="blg-logo"><?php echo get_bloginfo('name'); ?></a>
    <p><?php echo get_bloginfo('description'); ?></p>
  </div>

  <?php
    $categories = get_categories();
    echo "<ul class='blg-menu'>";
    foreach ($categories as $category) {
      echo '<li><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
    }
    echo '</ul>';
  ?>

  <form role="search" method="get" id="searchform" class="searchform blg-search" action="<?php echo esc_url(home_url('/')); ?>">
    <input type="text" name="s" id="s" placeholder="Search" value="<?php echo get_search_query() ?>">
    <input type="submit" id="searchsubmit" value="Search">
  </form>

</aside>

<nav class="blg-mb-menu">
  <img src="https://i.pravatar.cc/400?img=12" alt="Avatar" />
  <div><button onclick="toggleMenu('open')" class="blg-mb-icon"><img src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/menu.svg"/></button></div>
</nav>

<script type="text/javascript">
  function toggleMenu(state) {
    var sideNavBar = document.getElementById("blg-sidenav");

    if(state === "open") {
      sideNavBar.classList.add("blg-mb-active")
    }else {
      sideNavBar.classList.remove("blg-mb-active")
    }
  }
</script>