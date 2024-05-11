<?php
define( 'WP_CACHE', true ); // Added by WP Rocket

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
define( 'DB_NAME', 'elh29_db' );

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
define( 'AUTH_KEY',         'X/YUXV!&&Di2 _q+FXFjgrDs6<awOxb38(pozjAw)ASc@j{S ,22a)[@)!F oi%R' );
define( 'SECURE_AUTH_KEY',  ';@qBtu?G@;VF`G.S:GUeQ`3z>I15K92&GcpUHh%wtDgg^2XHSuE%upt(9:Bsi`Ym' );
define( 'LOGGED_IN_KEY',    ';iE|QI2SB[-B3U~|0zwdGZQV6L;c0;UkKOrNEq-62DUZ3x<A}lLB31L5@&T>-&ne' );
define( 'NONCE_KEY',        'P0q+2C?Ve[HdF}1hj^MqIe)nN88-Z2G*Uk`|Ild|):GTbpNT6M:2;f?m&DkK`abc' );
define( 'AUTH_SALT',        'z#.W=+z?OFll(KC}.jdjk~l<B6-=Qzvi2OC5SEZ#C(QwSg%!#-a>8@O$2PI9VmG!' );
define( 'SECURE_AUTH_SALT', '-+vuiJM?:qbs`4)lA?ix*EAwe@isf2WJtvqw(f5DvZCUEi${lf<P,VA]n[I{{0c6' );
define( 'LOGGED_IN_SALT',   'jI_*/`b5&IZ;t+g5xE=@?/ 0[q2Nnb3M|cLY^#%[[CTrb@(Un7kA;Xf_xzDd|`B&' );
define( 'NONCE_SALT',       '(s]4w[Pxk)r=,wP1tic!{unv}SI5}5;X|$5? {UxWoR0NLTe(kcq23._)Aj3pt1F' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'AmStcf_';

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
