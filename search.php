<?php get_header(); ?>

<div class="container main">
  <div class="row">
  <?php 
  if( have_posts() ): ?>
    <p class="col-sm-12">
    Halaman <span class="arsip">Pencari</span>
    </p>
    <?php
    while( have_posts() ):
      the_post();
      if ($post->post_type == 'page'){ continue;}
      get_template_part('content');
    endwhile;
  else:
    get_template_part('no_content');
  endif; 
  ?>
  </div>

</div>

<?php get_footer(); ?>