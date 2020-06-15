<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'shahahbr_shahadat');

/** MySQL database username */
define('DB_USER', 'shahahbr_root');

/** MySQL database password */
define('DB_PASSWORD', 'one1two2');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'F*!QF>)tGg5J_};4jQ?$KWAM,@k+L4sRz;[)BSzscnQ2a7U.|kZ,DEL!_V^r!0x4');
define('SECURE_AUTH_KEY',  ';qcm Y6E3QdhocX+uW0^*P%^}pv+9{^n^Ldp<Zgk+*=1u>2xF*`{2n1ZRk`aXQe>');
define('LOGGED_IN_KEY',    'A1L7 33!ornf2]KLV:m;U>$84l];gG?W{vYaSD}Rt*<!}&tS}>l|XD(>S3fx8LT{');
define('NONCE_KEY',        'Rb|%1-d|$<+P08 j)h_6r2:vs##{2:v#rDG$l=:HHi-j#(f&Y_MB9(_)M1YQ=!fh');
define('AUTH_SALT',        '(~dy$S<^^LbO}~1o{Fn9GI)N-qW ~XbQj+m*4UJFQdRRvvpK~n<iim0;c$-3F}w,');
define('SECURE_AUTH_SALT', '*OP8/$.BT@n/$!f)Q1EQ6r[~7{h+~kI@~Nqy_N4ngGgW$f-{?v]bP>ew?ju[y7Iu');
define('LOGGED_IN_SALT',   '%b~3;DW/7sx&ZK;v a+WX{Wy&DZ_Tv:0y^wph76>XD%KUjsd+Ro`u|e0:gli7amv');
define('NONCE_SALT',       'vlz ?H^hw0<!rVG4l;ZYoaO?>Mq)GV#c.{#EofY3)5AW6 LD09?#*`Hc*R%0o;|[');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
