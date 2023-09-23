<?php
define( 'WP_CACHE', true );

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'project1' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '82MqBGlHPM8|rwWgWbVey/vgaunGb0 h49lnq=9.foZiF4Eirk_PqNub53.y`NOr' );
define( 'SECURE_AUTH_KEY',  'pYUY`F:mE5{`ba2hLm51W_LsV@4e4][W:{P WVT[}u9C~yMZ210i9O7~SQ]j@XC#' );
define( 'LOGGED_IN_KEY',    ':y}5Y=,;Zf]<x *l#2i ]_TGD8<l`Tm|5k.Z]=FBNo$4T8*.u?<)1fs,:D6 RV=6' );
define( 'NONCE_KEY',        'Z/=n4#2[4:z}I; G+2k92R?6WdqU,N#.#3W-!B+dyLgP}J]wDj-tv7:3d:es1Ory' );
define( 'AUTH_SALT',        'Lv6vm&F/PIb,yajua=yWja rCNb/L=7Wj7Y#A~ :d0IkqYzu%(f(bE[X(t/K|4ss' );
define( 'SECURE_AUTH_SALT', '=m%R<<rab#YD{kKy{X#rN{b8{BM/ZKxP8qlGDN$qn?QR[p4A_]`7N +RgG9}(XOq' );
define( 'LOGGED_IN_SALT',   '+k_b%ErmhGb9X6#wUxc`/cDN!%lZb9kWhe4?Dz`l{C|KUmHeloqraXiU0DH!]c-)' );
define( 'NONCE_SALT',       '13*xlwgC*UVZW)|%*NIlt.2Vt``l7JmkHn~OXLl^i|XJD&TIY;5B.O5Uay{<|0R:' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
