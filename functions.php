<?php

//This functions file serves as the place to use the Wordpress API to perform high-level administrative functions
// It acts like a plugin and gets automatically loaded in both admin and front-end pages of a WordPress site
//Usually this file is used to define functions, classes, actions and filters to be used by other templates in the ITU News theme
//It can be used to add features and extend the functionality of both the theme, and the WordPress installation
//You can add both built in WordPress functions and regular PHP functions to hooks and filters that are predefined throughout the WordPress core library
//Some of the things you can do with this functions.php file include use WordPress actions and filters, you can enable post thumbnails, post formats, and navigation menus



//We say that the maximum width of graphic content ANYWHERE IN ITU NEWS is limited to 1920 in width
//turn this feature on by removing commenting if ShortPixel plugi n fails 
//if ( ! isset( $content_width ) ) {
//
  //   $content_width = 1920;
 //}

add_filter('jpeg_quality', function($arg){return 100;});
//We run a filter and we create a switch to reduce or increase global site image quality when needed



//We instruct Wordpress to intialize our ITU News theme and add thumbnail support and other features which are typically disabled by default 
function itunews_setup() {

    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );

}

//We instruct Wordpress to completely intialize our ITU News theme 
add_action('after_setup_theme', 'itunews_setup');

//We instruct Wordpress to intialize all the CSS & Javascript here 
function itunews_scripts() {

    wp_enqueue_style( 'materializecss', get_template_directory_uri() . '/secondary.css'); //Load the Third-Party CSS library from Materialize.css
    wp_enqueue_style( 'itunewscss', get_template_directory_uri() . '/style20180502A.css'); //Load our own stylesheet after loading Third Party so our styles are not overwritten 
//At the end of a minor update, specially to the CSS, we rename our CSS with the current date and time and change the same here. This will force all users to load the latest CSS everytime

wp_enqueue_script( 'materialize', get_template_directory_uri() . '/js/materialize.min.js', array('jquery'),true); //Load the Third party Javascript library
    wp_enqueue_script( 'timed-animations', get_template_directory_uri() . '/js/wow.min.js'); //Load the Javascript library which handles animation effects
    wp_enqueue_script( 'modernizer', get_template_directory_uri() . '/js/modernizr.js'); //Load the Javascript library which can recognize different browsers and their features when user visits site
    wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/customjava.js'); //Load all of our own custom Javascript
     
}

add_action('wp_enqueue_scripts', 'itunews_scripts'); //Start processing all these scripts


function nmt_quicktags_buttons( $qt_init) {
    $del_buttons = array('link','ins','img','code');
    $qt_init['buttons'] = implode(',', array_diff(explode(',',$qt_init['buttons']), $del_buttons));
    return $qt_init;
}



//We instruct Wordpress to remove unnecessary columns (not non functional but ones that take up too much space for writers and content editors) in the posts list in the backend
function rkv_remove_columns( $columns ) {
  
  unset( $columns['wpseo-score'] );
  unset( $columns['wpseo-title'] );
  unset( $columns['wpseo-metadesc'] );
  unset( $columns['wpseo-focuskw'] );
  unset( $columns['wpseo-score-readability'] );
  unset($columns['wpseo-links']);
unset($columns['wpseo-linked']);
  return $columns;
}

add_filter ( 'manage_edit-post_columns', 'rkv_remove_columns' );

//We ask wordpress to force refreshing the RSS every 60 seconds if migrated posts are not showing up on RSS feed
// add_filter('wp_feed_cache_transient_lifetime', create_function('', 'return 60;'));

//We ask database to limit excerpt lengths to 60 char
function wpdocs_custom_excerpt_length( $length ) {
    return 60;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

//Disable commenting functionality on all major locations
function df_disable_comments_post_types_support() {
  $post_types = get_post_types();
  foreach ($post_types as $post_type) {
    if(post_type_supports($post_type, 'comments')) {
      remove_post_type_support($post_type, 'comments');
      remove_post_type_support($post_type, 'trackbacks');
    }
  }
}
add_action('admin_init', 'df_disable_comments_post_types_support');

//Remove any kind of commenting, disabled or undisabled
function df_disable_comments_status() {
  return false;
}
add_filter('comments_open', 'df_disable_comments_status', 20, 2);
add_filter('pings_open', 'df_disable_comments_status', 20, 2);

//If there are existing comments already, get rid of them
function df_disable_comments_hide_existing_comments($comments) {
  $comments = array();
  return $comments;
}
add_filter('comments_array', 'df_disable_comments_hide_existing_comments', 10, 2);

//Remove comments from admin menus
function df_disable_comments_admin_menu() {
  remove_menu_page('edit-comments.php');
}
add_action('admin_menu', 'df_disable_comments_admin_menu');

//Disable comment handling by the admin menu
function df_disable_comments_admin_menu_redirect() {
  global $pagenow;
  if ($pagenow === 'edit-comments.php') {
    wp_redirect(admin_url()); exit;
  }
}
add_action('admin_init', 'df_disable_comments_admin_menu_redirect');

//Completely erase the entire commenting system in Wordpress backend 
function df_disable_comments_dashboard() {
  remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');
}
add_action('admin_init', 'df_disable_comments_dashboard');

//Disable the stupid comments bar at the top
function df_disable_comments_admin_bar() {
  if (is_admin_bar_showing()) {
    remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
  }
}
add_action('init', 'df_disable_comments_admin_bar');

//Inject image thumbnail into the queue while processing the RSS feed 
add_action('rss2_item', 'add_my_rss_node');

function add_my_rss_node() {
  global $post;
  if(has_post_thumbnail($post->ID)):
    $thumbnail = get_the_post_thumbnail( $post->ID, 'thumbnail' );
    echo("<ituimage>{$thumbnail}</ituimage>");
  endif;
}




?>