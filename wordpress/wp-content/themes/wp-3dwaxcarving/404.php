<?php get_header(); ?>

  <article id="post-<?php the_ID(); ?>" <?php post_class('col-lg-12 col-md-12'); ?>>

    <h1 class="ctitle"><?php _e( 'Page not found', 'wpeasy' ); ?></h1>
    <h2><a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'wpeasy' ); ?></a></h2>

  </article>

  <?php get_footer(); ?>
