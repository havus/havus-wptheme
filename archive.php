<?php get_header(); ?>

<div class="container main">
  <div class="row">
  <?php 
  if (have_posts()): ?>
  <p class="col-sm-12">
    <?php if (is_category()) {
      echo "Halaman Kategori ";
      echo '<span class="arsip">';
      single_cat_title();
      echo '</span>';
    } elseif (is_author()) {
      echo 'Halaman Author <span class="arsip">' . get_the_author() . '</span>';
    } else {
      echo "Halaman Arsip";
    }
    ?>
  </p>
    <?php while( have_posts() ):
      the_post();
      get_template_part('content');
    endwhile;
  else:
    get_template_part('no_content');
  endif; 
  ?>
  </div>

</div>

<?php get_footer(); ?>