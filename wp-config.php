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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dbs' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'VZzzY fH}?#X3CVx_>ADgZ_8e[3LB.eOej_:rvl:AJ7hLVD}s~g[<#0 C`5A!9Z.' );
define( 'SECURE_AUTH_KEY',  'jU5!k.;t 1B;3q(V<D2M9KoIrQq[W6P=NbfBn7haZ`_MEB!Z`2nv1xRy_1r46S^?' );
define( 'LOGGED_IN_KEY',    ':)#)M-<#Rn9U}h6`).x73r|xziymFMxCY<;=Nh6u1+9^k2Fr!7hUwv,%D%>QkUY&' );
define( 'NONCE_KEY',        'tx3Xn2IU3shI0GcHhBNPr-<@N86@*Vq8]CFCHbE~RJZVe@tE=uKI>)7F3,W3S=~c' );
define( 'AUTH_SALT',        'a,W_ns?1}YW-L`{-nn|+@o(*yw,w[kg8LZt=Ja$et~G9p!MAl~!mlUKScb&]=2{.' );
define( 'SECURE_AUTH_SALT', 'CtXJ[fRZi,3B&o]#I/^HN~dJz/6?C+`tT(S+6&F7Lg7W-e2O5OH[(< <@Bd;AvCG' );
define( 'LOGGED_IN_SALT',   'yBpbp(-}p=)czEc+x+s>0Y/,We*-?3*`>=#6-+I>F  SQj:-TH,-6$U1FzhJ:+EV' );
define( 'NONCE_SALT',       'Y7g0_ <9$(n5OqE%6_)6?o.m:^ET@kU$nc}EK$gFP9}nKD{4:,}R{g1o +pb!63g' );

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
