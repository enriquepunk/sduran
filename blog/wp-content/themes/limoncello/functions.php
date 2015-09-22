<?php
if ( function_exists('register_sidebar') ) {
    register_sidebar( array(
		'name' => __( 'Main Sidebar', 'punk2013' ),
		'id' => 'sidebar-1',
		'description' => __( 'Appears on posts and pages except the optional Front Page template, which has its own widgets', 'twentytwelve' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s" >',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title magento px15">',
		'after_title' => '</h3><hr >',
	) );
}
add_theme_support( 'post-thumbnails' );

?>
