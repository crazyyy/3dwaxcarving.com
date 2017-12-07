<?php /* Template Name: Works Page */ get_header(); ?>

  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class('col-lg-12 col-md-12'); ?>>

      <h1 class="page-title inner-title"><?php the_title(); ?></h1>

        <?php if( have_rows('gallery_list') ): while ( have_rows('gallery_list') ) : the_row(); ?>

          <h2 class="gallery_list--title"><?php the_sub_field('gallery_title'); ?></h2>
          <?php $images = get_sub_field('images'); if( $images ) { ?>
            <ul class="article-gallery_list">
                <?php foreach( $images as $image ): ?>
                    <li>
                        <a href="<?php echo $image['url']; ?>" rel="lightbox">
                            <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
          <?php } ?>

        <?php endwhile; endif; ?>

      <?php the_content(); ?>
    </article>

  <?php endwhile; endif; ?>

<?php get_footer(); ?>
