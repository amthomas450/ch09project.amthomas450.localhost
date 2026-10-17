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
define( 'DB_NAME', 'ch09.project' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'mysql' );

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
define( 'AUTH_KEY',         '#U0s%UU%2Fp,b-Er.NrGtF81agKKEf(*:y0`r<b?&/ch7;NZ;~}MfK20>r06ts]k' );
define( 'SECURE_AUTH_KEY',  '8R<|KljCW=#MpW7Gb%b` %PB#~|iasP7w$?bN?m/%tdfRxD^58_!Y1AU/=)0)=#-' );
define( 'LOGGED_IN_KEY',    '7f R^pLi(CNW!7AKRMAB0v>b7tWZgniRx9@(0/Ir_-+pIE%Qm,t>6fDprP4F.4U$' );
define( 'NONCE_KEY',        '1qek))iSLsvunhVH)%g s<<=M0WZF=!37;WjGtOzs`L)Gx<RLO7A/ +Bx?FaEt`#' );
define( 'AUTH_SALT',        '`x]FDG(xmr!.uP8 9,(QGKxXQ{RdA7$.e29+*wZ7SH-u0]TO:)|@x>HyVpb>=n_r' );
define( 'SECURE_AUTH_SALT', '%L5GkC@+hzyK&mcm{XVX|U]BSd_M9]`TJI|e=eVy>S>sV5cklcUvj/E-dj9~so*m' );
define( 'LOGGED_IN_SALT',   '-c[Aaq%_#E^/Y0bh[)xld*FVycm-=nHWBrKJVg|u;M{1~?VbR[{;|UQ%8*KH(4lB' );
define( 'NONCE_SALT',       'I!KA65*g!O+gQ)u%{e?kr9P16zsl{z0]Y 9LI@y_:ek3lxccC&3T8`K=FUSUF+.X' );

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
