<?php get_header(); ?>

<div class="container main">
  <div class="row">
  <?php 
  if( have_posts() ):
    while( have_posts() ):
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