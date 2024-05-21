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
define( 'DB_NAME', 'zauce_db' );

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

// Remove P tag 
define( 'WPCF7_AUTOP', false );
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
define( 'AUTH_KEY',         'CHsP`Iv;3lK]oM1dzlD^}qEC*l+*I k`7lC(9ctRhtw)9]l8U2O=O5JHyrvN+x=I' );
define( 'SECURE_AUTH_KEY',  '&y]J6Cct[$)PQ*3l9yfL%AvbhVKVCqD+sX5*;;hi>)CF!9@ElixjM%HaNXv[.#[J' );
define( 'LOGGED_IN_KEY',    'x#d}TU-u>WF2Ap[_K&9(J-hCdVV[yqF_T9WZ5Z]Sss_oXLq0>OCT)pSV6 I7N]W[' );
define( 'NONCE_KEY',        'PY::kkf27YM%HY6_0xb3{</.L;NVSBx3]j(EXr_k|6-.e2=i]j|gGeA2}*unmu8h' );
define( 'AUTH_SALT',        'uU}axhuw9e[2M6*W*q?doSMG9<E-2%7~!U)7oLJ^Qm|y+!nhEf/HD|-J4A2:rdKe' );
define( 'SECURE_AUTH_SALT', 'F6;fM$C=+a~;Ch&k)KsX}a9~C;K?[hz[Nt%>(}!.g$.#c@,_yq~6S;_gyHe>7,eh' );
define( 'LOGGED_IN_SALT',   'NvpaTBm]8Z/g2-o/r/IT.?nDB!ERrEqYrSfnutAUM&/]Y]^3bAhq@/tei+i: P[d' );
define( 'NONCE_SALT',       '1>]u+M{2d;q!d%MTZi?vcj{c|Z.Xw9{g-#REs/(e`(skg%qz9$lVJ19oCX>E14=k' );

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
