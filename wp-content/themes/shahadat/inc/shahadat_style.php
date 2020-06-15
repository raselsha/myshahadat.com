<?php 

function theme_style()
{
	wp_enqueue_style('font-awesome',get_template_directory_uri() . '/css/font-awesome.css',false,'4.5.0','all');
	wp_enqueue_style('bootstrap',get_template_directory_uri() . '/css/bootstrap.min.css',false,'4.5.0','all');
	wp_enqueue_style('style',get_template_directory_uri() . '/css/style.css',false,'1.0','all');
	wp_enqueue_style('main',get_template_directory_uri() . '/style.css',false,'1.0','all');

	//get style script
	wp_enqueue_script('main-js',get_template_directory_uri() .'/js/jquery.js', array(), '1.0', true);
	wp_enqueue_script('bootstrap-js',get_template_directory_uri() .'/js/bootstrap.min.js', array(), '1.0', true);

}
add_action('wp_enqueue_scripts','theme_style');

?>

