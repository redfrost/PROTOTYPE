<?php

// Custom functions
add_image_size( 'list_thumbnail', 640, 400, true );

// Enable Custom Post Type Tag Search
function post_type_tags_fix($request) {
    if ( isset($request['tag']) && !isset($request['post_type']) )
    $request['post_type'] = 'any';
    return $request;
} 
add_filter('request', 'post_type_tags_fix');


//New Sidebar
if ( function_exists('register_sidebar') ) {
register_sidebar(array(
'name' => 'Secondary Sidebar',
'id' => 'sidebar-secondary',
'description' => 'Secondary sidebar in 3 Column layout.',
    'before_widget' => '<section id="%1$s" class="widget %2$s"><div class="widget-inner">',
    'after_widget'  => '</div></section>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>',
));
}


