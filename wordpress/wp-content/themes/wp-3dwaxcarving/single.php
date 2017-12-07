<?php get_header(); ?>

  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class('col-md-8 article-single'); ?>>

      <h1 class="single-title inner-title"><?php the_title(); ?></h1>

      <?php the_content(); ?>

      <?php the_tags( __( 'Tags: ', 'wpeasy' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>

    </article>
  <?php endwhile; endif; ?>

  <?php get_sidebar(); ?>

<?php get_footer(); ?>
