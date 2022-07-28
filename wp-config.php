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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'health-blog-site' );

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
define( 'AUTH_KEY',         '^lohGX.KB;m]Y*eaXi0/mRBE#Uq$9DBb4k<FY1d}a_Ly07*VsB`loO9I;VR`4mf(' );
define( 'SECURE_AUTH_KEY',  '?!rK@-RL{gdDCA^QRsy,qW.RvB%YB>(?omFh^0rCT;F86s*ncjHxFNQ:#R0C2|_B' );
define( 'LOGGED_IN_KEY',    'X%T:`6>KV*Fz2:ak%N~Ts,$(_e^Um!}Gh0|E2 DnHA%W<huH~tzo8[)QuzHsomW+' );
define( 'NONCE_KEY',        'fza7S%{(.XR|?$j 8eg=RtlW+L[Z)2b<hheUL]2iQ?Aer=_vr!+kAwFk+,gDeufU' );
define( 'AUTH_SALT',        'H!|F@SeKFo271U^B_OK7C,I5..lu<IHPV2d5`=KM&j[Afr5qS;E**12qZz!P]A/[' );
define( 'SECURE_AUTH_SALT', '9K:bazfO0.q; I~T~+G)=iP8,ZP:pFD9X>A0=G2t/Qj`JRX:;}@{HF@ $v]aSd;V' );
define( 'LOGGED_IN_SALT',   'KQ!c##Gll-Z:$0IRiG~bGHjRn%yruS!e}z7TYRT5[Z5~RC9n5NTy);ynLvdhLg9h' );
define( 'NONCE_SALT',       'XZ9BMBj)g@bmgsMF2OW^3,taxVZo)VXN`{ZYfGe=2#*H|csqpZMkpg]bK;BPk/+]' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
