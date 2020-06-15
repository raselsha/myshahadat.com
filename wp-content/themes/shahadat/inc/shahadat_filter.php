<?php



function the_title_trim($title) {
  $title = attribute_escape($title);
  $findthese = array(
    '#Protected:#',
    '#Private:#'
  );
  $replacewith = array(
    '', // What to replace "Protected:" with
    '' // What to replace "Private:" with
  );
  $title = preg_replace($findthese, $replacewith, $title);
  return $title;
}
add_filter('the_title', 'the_title_trim');

// *********************removed protected from title******



// ===================Custom Login=======================//

function redirect_login_page() {
  $login_page  = site_url('/login');
  $page_viewed = basename($_SERVER['REQUEST_URI']);
  if( $page_viewed == "wp-login.php" && $_SERVER['REQUEST_METHOD'] == 'GET') {
    wp_redirect($login_page);
    exit;
  }
}
add_action('init','redirect_login_page');



function login_failed() {

  $login_page  = home_url( '/login/' );

  wp_redirect( $login_page . '?login=failed' );

  exit;

}

add_action( 'wp_login_failed', 'login_failed' );

 

function verify_username_password( $user, $username, $password ) {

  $login_page  = home_url( '/login/' );

    if( $username == "" || $password == "" ) {

        wp_redirect( $login_page . "?login=empty" );

        exit;

    }

}

add_filter( 'authenticate', 'verify_username_password', 1, 3);



function logout_page() {

  $login_page  = home_url( '/login/' );

  wp_redirect( $login_page . "?login=false" );

  exit;

}

add_action('wp_logout','logout_page');

//===================================================

/* Disable the Admin Bar. */

add_filter( 'show_admin_bar', '__return_false' );