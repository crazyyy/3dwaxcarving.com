<?php get_header(); ?>

  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class('col-lg-12 col-md-12'); ?>>

      <h1 class="page-title inner-title"><?php the_title(); ?></h1>

      <?php $images = get_field('small_gallery_images'); if( $images ) { ?>
        <div class="row">
          <div class="col-md-2">
            <ul class="article-gallery__small">
                <?php foreach( $images as $image ): ?>
                    <li>
                        <a href="<?php echo $image['url']; ?>" rel="lightbox">
                            <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
                        </a>
                        <p><?php echo $image['caption']; ?></p>
                    </li>
                <?php endforeach; ?>
            </ul>
          </div>
          <div class="col-md-10">
            <?php the_content(); ?>
          </div>
        </div><!-- /.row -->
      <?php } else { ?>
        <?php the_content(); ?>
      <?php } ?>
    </article>

  <?php endwhile; endif; ?>

<?php get_footer(); ?>
