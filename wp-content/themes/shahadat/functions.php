<?php





//get stylesheet css files

require_once(get_template_directory() .'/inc/shahadat_style.php' );

//get menu 

require_once(get_template_directory() .'/inc/shahadat_menu.php' );

//bootstrap menu

require_once(get_template_directory() .'/inc/wp_bootstrap_navwalker.php');

//get pagination 

require_once(get_template_directory() .'/inc/shahadat_pagination.php' );

//Theme support 

require_once(get_template_directory() .'/inc/shahadat_theme_support.php' );

//Theme filter 

require_once(get_template_directory() .'/inc/shahadat_filter.php' );

//Theme widgets 

require_once(get_template_directory() .'/inc/shahadat_widgets.php' );