<?php get_header(); 

if (is_page()) :
  // Silence is Golden
else :?>
<div class="container main">
  <div class="row">
<?php endif; ?>

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

<?php 
if (is_page()) :
  // Silence is Golden
else :?>
  </div>
</div>
<?php endif; ?>

<?php get_footer(); ?>