<?php
/* scripts, css and fonts */
function wpdocs_theme_name_scripts() {
  wp_register_style('main-style', get_template_directory_uri().'/blog.css', array(), true);
  wp_enqueue_style('main-style');
  wp_register_style('bootstrap-style', "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css", array(), true);
  wp_enqueue_style('bootstrap-style');
  wp_register_style('font-crimson', "https://fonts.googleapis.com/css?family=Crimson+Text&display=swap", array(), true);
  wp_enqueue_style('font-crimson');
  wp_register_style('font-open-san', "https://fonts.googleapis.com/css?family=Open+Sans&display=swap", array(), true);
  wp_enqueue_style('font-open-san');
  wp_register_style( 'font-awesome-free', "//use.fontawesome.com/releases/v5.8.2/css/all.css");
  wp_enqueue_style('font-awesome-free');
  wp_deregister_script( 'jquery' );
  wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js');

}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );

/* retrieve thumnails*/
function mytheme_post_thumbnails() {
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'mytheme_post_thumbnails' );

/* retrieve menu */
register_nav_menus( array('menu-principal' => 'Menu principal') );

/* counter */
function wpb_set_post_views($postID) {
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
//To keep the count accurate, lets get rid of prefetching
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

function wpb_track_post_views ($post_id) {
    if ( !is_single() ) return;
    if ( empty ( $post_id) ) {
        global $post;
        $post_id = $post->ID;
    }
    wpb_set_post_views($post_id);
}
add_action( 'wp_head', 'wpb_track_post_views');

function wpb_get_post_views($postID){
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    return $count.' Views';
}



// Numbered Pagination
if ( !function_exists( 'wpex_pagination' ) ) {
  	function wpex_pagination() {
		$prev_arrow = is_rtl() ? '→' : '←';
		$next_arrow = is_rtl() ? '←' : '→';
		global $wp_query;
		$total = $wp_query->max_num_pages;
		$big = 999999999; // need an unlikely integer
		if( $total > 1 )  {
			 if( !$current_page = get_query_var('paged') )
				 $current_page = 1;
			 if( get_option('permalink_structure') ) {
				 $format = 'page/%#%/';
			 } else {
				 $format = '&paged=%#%';
			 }
			echo paginate_links(array(
				'base'			=> str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format'		=> $format,
				'current'		=> max( 1, get_query_var('paged') ),
				'total' 		=> $total,
				'mid_size'		=> 3,
				'type' 			=> 'list',
				'prev_text'		=> $prev_arrow,
				'next_text'		=> $next_arrow,
			 ) );
		}
	}
}

//Sidebar

register_sidebar( array(
'name' => 'Sidebar - Inset',
'id' => 'sidebar-1',
'before_widget' => '<div class="sidebar-module sidebar-module-inset">',
'after_widget' => '</div>',
'before_title' => '<h4>',
'after_title' => '</h4>',
) );

