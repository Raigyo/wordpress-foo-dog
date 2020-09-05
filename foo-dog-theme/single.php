<?php get_header(); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>

      <h2 class="blog-post-title">
        <?php the_title(); ?>
      </h2>
      <p class="blog-post-meta">
        <?php the_time( 'D, j F y, G:i a' ) ?> by
        <?php the_author(); ?> -
        Featured: <?php the_category(' '); ?> - <?= wpb_get_post_views(get_the_ID()); ?>
      </p>
      <!--?php wpb_set_post_views(get_the_ID()); ?-->
      <div class="boxContent"><?php the_content();?><?php comments_template(); ?></div>
      <div class="boxImg"><?php if( has_post_thumbnail() ): echo get_the_post_thumbnail(); endif;?></div>
      <!--?php get_template_part( 'content', get_post_format() );?-->
    <?php endwhile; endif;?>
<?php get_footer(); ?>
