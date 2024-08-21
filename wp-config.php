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
define( 'DB_NAME', 'aquakid' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'x@~wJpZ-e9+!6zXWUy$Ta/EIf9jXDfY?Bp1n|Wv@-5A|6a[hRE1@%->vywRE>3B+' );
define( 'SECURE_AUTH_KEY',  'z+umYKz{_qQLe-%:i|U<8%MW:s(Pc1=/_fC-@iCXS4?vfvN6, (U7_kxH[w)DxrH' );
define( 'LOGGED_IN_KEY',    'D@5ZW7%d ,?7P-ES!qhFgT&^,mG8*U k7UHOeBW#O%c]mf&jEyW}=ir*O!{=j,qb' );
define( 'NONCE_KEY',        'BU*>FUhnRS=tzpJ8YSA:,W`< Js.t$ys!ZLl],gB~Yj/Wz}jFdv!3c}/Hb$JcX.f' );
define( 'AUTH_SALT',        '~D=:@{k,HJN$V,bBUn|Axb&`Q-DHDO1]8Y`bX-L]/EBDRqU1m k1f-vQxVw07oKT' );
define( 'SECURE_AUTH_SALT', 'w%eG68(gdCKw#)^/m;5A;IuL/),I?s%U?B6` $+-q=(ZOz-5YiJ$d(LZP5pR/,N2' );
define( 'LOGGED_IN_SALT',   'E;epZU-Uk:?sTBY/cT#Iz9LcoeZ%4vbw=u8.8ZLY;FY??9Zk(+BAj3KKwbSex[gx' );
define( 'NONCE_SALT',       '0AiLF%hp!^06|$.7W<KS+%RBGoOCqlE_Vx*/1(pEo`+hAzvqSB7IjeoRwT7HR<Z#' );

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
