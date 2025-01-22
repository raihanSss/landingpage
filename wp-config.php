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
define( 'AUTH_KEY',         'M~-xL75%DDso9EgkI$ipAvlA1SB+0}^C+ X=PXfr]g|6(xygBQ[bRZsoZ}GU$M[F' );
define( 'SECURE_AUTH_KEY',  '%&BL]&3*5@nG]k^R;0NM#Mt*zCWnfOW7DPyH.<2 {&g&X.CS`i;{%D`9^Wg$]0zJ' );
define( 'LOGGED_IN_KEY',    'Oid+^WWeoRc_FJlj}CQ,YZBkMZ>lb,g~ o&,U2VAG/%F2JjsX<AtRj}Ag%,|PQE0' );
define( 'NONCE_KEY',        '%I`;~fte)>(v_gh,t23.K$;P%mr+ytZGBpkuF{$]O~XTGzb:e{%&hN;}@6U#YnIc' );
define( 'AUTH_SALT',        'GhIR2dCdSxZh4z<LP(:>/(_TSA{+J)KtJ_nTUZ?SqV W/n{nGmPnUAUJzwa5FSo)' );
define( 'SECURE_AUTH_SALT', 'lGrYBRz ]kHu#%QLj6f|kC6kdZD{DV M)+0cso7!p=P&Y0$%;td/wXq(b<L6a3{5' );
define( 'LOGGED_IN_SALT',   'QxUl~WsO+t=mO#f+5 r0ySPdCYWzD@*x_i@uB1Xw 0<,!kP3a<8m. / L{%9Uy?-' );
define( 'NONCE_SALT',       'l~V2EPBs8*?yXrTXTyYo5&SEQ.+sOhauoZH,`PES~BkxPdiFkE0ey)eh*AIyDub)' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
