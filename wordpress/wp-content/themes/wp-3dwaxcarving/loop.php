<?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <div id="post-<?php the_ID(); ?>" <?php post_class('row looper'); ?>>

    <a rel="nofollow" class="feature-img col-md-4 hidden-sm" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
      <?php if ( has_post_thumbnail()) { ?>
        <img src="<?php echo the_post_thumbnail_url('medium'); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
      <?php } else { ?>
        <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
      <?php } ?>
    </a><!-- /post thumbnail -->

    <div class="looper-content col-md-8 col-sm-12">
      <h2 class="inner-title">
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
      </h2><!-- /post title -->

      <?php wpeExcerpt('wpeExcerpt40'); ?>
    </div><!-- /.looper-content col-md-8 -->

  </div><!-- /looper -->
<?php endwhile; endif; ?>
