<?php 

function shahadat_site_language() {
    register_sidebar( array(
        'name' => __( 'Site Language', '' ),
        'id' => 'language',
        'description' => __( 'Site language switcher tools', '' ),
        'before_widget' => '<div class="language">',
		'after_widget'  => '</div>',
		'before_title'  => '<small class="language_title">',
		'after_title'   => '</small>',
    ) );
}

add_action( 'widgets_init', 'shahadat_site_language' );

function shahadat_sidebar_widgets() {
    register_sidebar( array(
        'name' => __( 'Main Sidebar', '' ),
        'id' => 'main_sidebar',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
        'before_widget' => '<div class="widget">',
	'after_widget'  => '</div>',
	'before_title'  => '<h3 class="widget_title">',
	'after_title'   => '</h3>',
    ) );
}

add_action( 'widgets_init', 'shahadat_sidebar_widgets' );

?>