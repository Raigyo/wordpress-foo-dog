  <?php get_header(); ?>
  <?php if(! is_home()): ?>
    <div class="catTitle"><h2><?php the_category(' '); ?></h2></div>
  <?php else:
     echo do_shortcode('[metaslider id="64"]'); ?>
  <?php endif; ?>
  <div class="row">
    <div class="col-sm-8 blog-main">
      <?php
        if ( have_posts() ) : while ( have_posts() ) : the_post();?>
        <h2 class="blog-post-title">
          <a href="<?php the_permalink();?>"><?php the_title(); ?></a>
        </h2>
        <?php get_template_part( 'content', get_post_format() );
        //if( has_post_thumbnail() ): echo get_the_post_thumbnail(); endif;
        endwhile; endif;
      ?>
      <div class="paginationIndex"><?php wpex_pagination(); ?></div>
    </div><!-- /.blog-main -->
    <?php get_sidebar(); ?>
  </div><!-- /.row -->

  <?php get_footer(); ?>
