<?php get_header(); ?>
  <div class="articles-container col-lg-8 col-md-8">

    <h1 class="ctitle"><?php _e( 'Latest Posts', 'wpeasy' ); ?></h1>
    <?php get_template_part('loop'); ?>
  </div>
  <?php get_sidebar(); ?>

  <?php get_template_part('pagination'); ?>
<?php get_footer(); ?>
