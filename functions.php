<?php
//add support for featured images
add_theme_support('post-thumbnails');
//prevent wordpress from inserting <p> tags when using the_content()
remove_filter('the_content', 'wpautop');
//add support for custom header (for the image mostly)
add_theme_support( 'custom-header' );
//Would have added support for multiple different background images for different sections if I had the time!
?>

