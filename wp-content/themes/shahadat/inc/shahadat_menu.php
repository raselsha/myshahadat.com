<?php 

function shahadat_menu() {
  register_nav_menus(
    array(
      'primary_menu' => __( 'Primary Menu' ),
      'secondery_menu' => __( 'Secondery Menu' ),
      'footer_menu' => __( 'Footer Menu' )
    )
  );
}
add_action( 'init', 'shahadat_menu' );


?>