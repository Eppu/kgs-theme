<?php
//add support for featured images
add_theme_support('post-thumbnails');
//prevent wordpress from inserting <p> tags when using the_content()
remove_filter('the_content', 'wpautop');

add_theme_support( 'custom-header' );
?>

