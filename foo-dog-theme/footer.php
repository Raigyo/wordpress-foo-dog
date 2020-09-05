</div> <!-- /.container -->
<div class="footer">
  <div class="container">
    <footer class="blog-footer">
      <nav class="footerCat" id="footerNav" role="navigation">
        <h3>Categories</h3>
        <div class="catlist"><?php wp_nav_menu( array( 'theme_location' => 'menu-principal' ) ); ?></div>
      </nav>
      <div class="footerPopular">
        <h3>Popular posts</h3>
        <?php
          $popularpost = new WP_Query( array( 'posts_per_page' => 4, 'meta_key' => 'wpb_post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC'  ) );
          while ( $popularpost->have_posts() ) : $popularpost->the_post();
        ?>
        <div class="clearfixPop">
          <div class="footerPopularImg"><?php echo get_the_post_thumbnail(); ?></div>
          <div class="footerPopularTxt">
            <a href="<?php the_permalink();?>"><?php echo wp_trim_words(get_the_title(), 8, '...'); ?></a>
          </div>
        </div>
        <?php endwhile; ?>
      </div>
      <div class="footerInsta">
        <h3>Instagram</h3>
        <!-- http://localhost/wp-foo2/wp-content/uploads/2019/05/insta.png -->
        <a href="https://www.instagram.com/dog_digest/"><img src="<?php bloginfo('template_url'); ?>/img/insta.png" /></a>
      </div>
      <div class="footerCopyright">
      <span class="socialMedias">
        <i class="fab fa-facebook"></i>
        <i class="fab fa-twitter"></i>
        <i class="fab fa-instagram"></i>
      </span>
        <span>
         © FooDog / Photographic credits:<a href="https://www.pexels.com/"> pexels.com</a></p>
        </span>
      </div>
    </footer>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<?php wp_footer(); ?>
</body>
</html>
