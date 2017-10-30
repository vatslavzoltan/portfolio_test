<?php





require_once ( get_stylesheet_directory() . '/theme-options.php' );

//Thumb of post
if ( function_exists( 'add_theme_support' ) ) {
add_theme_support( 'post-thumbnails' );
}

//For Svg import
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');


// Remove p tags from category description
remove_filter('term_description','wpautop');
remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );
?>