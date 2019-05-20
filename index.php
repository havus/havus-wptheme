<?php get_header(); ?>

<div class="container main">
  <div class="row">
  <?php 
  if( have_posts() ):
    while( have_posts() ): ?>
    <div class="col-sm-4">
      <div class="content">
      <?php the_post();?>
        <div class="content-head">
          <h3><a href=" <?php the_permalink();?> "><?php the_title();?></a></h3>
        </div>
        <div class="content-body">
          <p><?= get_the_excerpt(); ?></p>
          <hr>
        </div>
        <div class="case-meta-cat row">
          <div class="categories col-sm-6">
            <!-- <p>Kategori:</p> -->
            <p><?php the_category(); ?></p>
          </div>
          <div class="meta-info col-sm-6">
            <!-- kalo get perlu di echo, kalo the tidak perlu -->
            <?php echo get_avatar( get_the_author_meta( 'ID' ), 30 ); ?>
            <a href="<?= get_author_posts_url(get_the_author_meta('ID'));?>">
                <?php the_author_meta('display_name'); ?></a>
            <p><?php the_date('j M Y'); ?></p>
          </div>
        </div>
        <div class="content-foot">
          <a href="<?php the_permalink(); ?>">MORE</a>
        </div>
      </div>
    </div>
    <?php endwhile;
  else:
    echo("tidak ada post");
  endif; 
  ?>
  </div>

</div>

<?php get_footer(); ?>