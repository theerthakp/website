<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u577863665_test_db' );

/** Database username */
define( 'DB_USER', 'u577863665_test_db' );

/** Database password */
define( 'DB_PASSWORD', '@test_db_App23' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'cwcm[JG2O9`SRAD=CqzS$mgj2o9-C_cT$Xm9;1ee{wjBkPP`fDdeu5M9QoK|u)PY' );
define( 'SECURE_AUTH_KEY',  '5n0)PG:_C(}6chwr>lDZ p@E<:p.|NVlj~$i^x{~UZWSyb[~x`okWxH{IZk`t)9W' );
define( 'LOGGED_IN_KEY',    'B@nnh>aIx*31.2K]] 6=uRPLbG!L<A[#B[.3N.r0a+qU3WbH6~*7Fm]C4$x$m=jQ' );
define( 'NONCE_KEY',        'QHkrl,3rQt(^7fM?kce^e>oywA)W1W%R%:K1@V 9`9GOw6oQ}liqCX+Q[WCV4iIt' );
define( 'AUTH_SALT',        'PNVSj[IOjGS-HbO 7 qGzrB!V;fkXPv)YrWo>*Loh.i0w.pn|,WV`F^]z<6w xT[' );
define( 'SECURE_AUTH_SALT', '9#}`3zgQaRh60zR~EMQ0XReY2maGsj|.tJA@Aw(6oD?]~B;jaX`C^#%U5^d;2D[v' );
define( 'LOGGED_IN_SALT',   'bx3HG5C}4, T0{)F}Kn%>L-RskXZ#wGW:crypD>pt_|Fuq=~)?+4rV.,r@prReL0' );
define( 'NONCE_SALT',       'm~I~T%DorHLE2AM-}WM!{;^5yX}jCd+[4Ji_/m+;>Szf6`(+c-9HQ0xm0mH5GT)g' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);
@ini_set('display_errors', 0);
define('WP_MEMORY_LIMIT', '256M');


/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
