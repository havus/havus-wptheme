<?php 
if (is_single()) : ?>

<div class="col-sm-12 sub-title">
  <h3><?php the_title();?></h3>
</div>
<div class="col-sm-12 single-cat">
  <?php the_category(); ?>
</div>
<div class="col-sm-12 full-content">
  <?php the_post_thumbnail('big-thumb'); the_content(); ?>
</div>

<?php elseif (is_page('about-us')) : 

  get_template_part('about_us');

else : ?>

<div class="col-sm-4">
  <div class="content">
    <div class="content-head">
      <h3><a href=" <?php the_permalink();?> "><?php the_title();?></a></h3>
    </div>
    <div class="content-body">
      <p><?= get_the_excerpt(); ?></p>
      <hr>
    </div>
    <div class="case-meta-cat row">
      <div class="categories col-sm-6">
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

<?php endif; ?>