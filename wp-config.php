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
define( 'DB_NAME', 'Testing' );

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
define( 'AUTH_KEY',         '0TOQc5)S:D=`x&K*W73V2<DK$_j!1D3(+8[|7ji|31Zte%r)0JBOOzYc5#xN@Q$1' );
define( 'SECURE_AUTH_KEY',  '`tG`PUUQ3D7,RGvzxV.YjL1TRWg3Q6(|:M5oJMmZr@bmDj~Otp_z~SBGr}23d&*y' );
define( 'LOGGED_IN_KEY',    '+BBAZSau@.YT4_~cx*_Wjf^w#c#YIXlq#|3H1DUqReoi4?VY%ud1J.V#Kux}V)A6' );
define( 'NONCE_KEY',        'Ywv][*1kaWb#$?rXB6BZvHx1B@c[qie80ZlnjYjiuTQTXyDGotyOMvkpL?r~Z%2I' );
define( 'AUTH_SALT',        'k:m{4vvsnJ}):~i9Hf4o:blDz|41f]src`vq!u3H@?ls1R4m^AawWsx}]!+x08H1' );
define( 'SECURE_AUTH_SALT', 'D9cRLkrypte]m!!/F%zHqBKCo9nJhTA:Os(<MfXw-Z5A~yi]r*U}-`+kec?J0A;F' );
define( 'LOGGED_IN_SALT',   ':Ib0Y5#WGXo&xe09/Z) @e<!;5x+>#u3tXsiOK0U&j`QA:YFMz8&g}$$&95BIBlD' );
define( 'NONCE_SALT',       'Zl6v(l9!iG#+dQXyG@VDfkH%wt_8oB!]8g#N<[m&Mx0L1E5GlqZQ;?k_#sEe>DK3' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
