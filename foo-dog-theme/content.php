<div class="blog-post">
  <p class="blog-post-meta">
    <?php the_time( 'D, j F y, G:i a' ) ?> by
    <?php the_author(); ?> -
    Featured: <?php the_category(' '); ?> - <?= wpb_get_post_views(get_the_ID()); ?>
  </p>
  <!--?php the_content(); ?-->
  <div class="boxContent"><?php the_excerpt();?></div>
  <div class="boxImg"><?php if( has_post_thumbnail() ): echo get_the_post_thumbnail(); endif;?></div>
</div><!-- /.blog-post -->
