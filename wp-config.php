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
define( 'DB_NAME', 'wordpress-2' );

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
define( 'AUTH_KEY',         'L61l_i+]9]@1x/?$TI#>T%77Gh*QP0LzrvmCM~W_USp$95DF:*{rOY1A 6Lg:<=u' );
define( 'SECURE_AUTH_KEY',  'btSkh.^K{3(%Wub]nOJ5+c$q:Uf$S$|[>5*]deNZ7!P!w^Yw&C.KJf:O[taP^>B|' );
define( 'LOGGED_IN_KEY',    '3aXQS45tqYHlEvQ&3m3zE{{Nr?/Sr1YjLY%EIKD0ZOeDbv5|=MteCd+m:$pL`YI]' );
define( 'NONCE_KEY',        'C(pA&;d4)B8&KBDVTw!fT1>uo)B%$PZ<AOgI~b&!DQ1X=B`o#UE5Sc.IyjLu$U~V' );
define( 'AUTH_SALT',        'o<+!dcj9I}Afw M{V]/>-CyvZw$SWp@RAsjum@sT)0RlVT(>*Q5bukHb?b4<wNh2' );
define( 'SECURE_AUTH_SALT', 'ZF)hbXGrDt=KO%PD;3`NlQSO_VkkS*$gPT})0~PnXXAK `77?JXX& Va;Ex4-6t[' );
define( 'LOGGED_IN_SALT',   'a3Kxin9QxkMpuVSy=n3y@:qp@(c+x]5!<)t0h)|F)-c0SBWxm`#s=fYRnj^jw@A8' );
define( 'NONCE_SALT',       'iHQT$G8CC}}h#W?!cY6q$d<!]i)FTLrq`_y%Zz{bU~94E2u M3ou;XB|msZ2ool ' );

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
