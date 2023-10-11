<?php
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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '@{VPw+Cb&A5*rBxh{{>n31{XUc]auxI)2tn;A+?? J_4i. uhc9cEqwo17#e18/:' );
define( 'SECURE_AUTH_KEY',  'EwlTlW5d]E=.NlA.DKX.PXjIN@_C,#^Yk&~yqKmFq67mTfNwiNhaARW-z<I=t@?.' );
define( 'LOGGED_IN_KEY',    'uW*g,5sq#Ut%O%AxQ#[%*2m2E}GQ$F),Y96W]RB^1dV<rku4pdP<^}_M Kly$fgI' );
define( 'NONCE_KEY',        '.Fe=ZR]VMe$gg+VSug;OlYHbvN~9;Qfrm^}nU[T{ DnOWD7KAZR1m2E`i/+kWfLw' );
define( 'AUTH_SALT',        'MU4qKAze_(.3{nI?yk)?y;-Ba3ss13T1l#!<-L6j)U3vv;p4YNc4#oSu }7<N~!3' );
define( 'SECURE_AUTH_SALT', ';K]t4lNHr& MIpZ%y#5g?4|s^45w`{yuf)6`{~BZ)9[u!d:UEPYi?2WQ=u5JhPIi' );
define( 'LOGGED_IN_SALT',   'EL3s$Ya|eUxHj/l|WLb+I?{i,{!Sr*9C6E=u3uE@Hc6cLy jcD}|:f- [Tdr!o{|' );
define( 'NONCE_SALT',       '*0uZ0*A1W+ L,Co.+[wNK*t2h2vgRCOo{-2<[0*n=@-1v:CXbz3h&nYw0nI2&m9k' );

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
