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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Mysql123@@' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '#e{qVu7uz?08rz6?t~<3k1ew:PVqvfu-I#(iU~CaKn6b^[Qar7iym%5$64LgbbPj');
define('SECURE_AUTH_KEY',  'K#||?=( 14b<OaIaB)[m?}3AnYIa=]<hGNE[pdqeu,eHH>j~9~JL5O&->=&8F0|C');
define('LOGGED_IN_KEY',    '~|XihO>zW*dlhJC9pwN.nT[@Zqo)ys+*09GHzHJB54Szt?8(GFlD.TBv>g%d,-!q');
define('NONCE_KEY',        't+woz=V!<F+Xm=0 K4-f~^p]a(5y!:RpXm1c) BKn(K>=Z}sQdLaxHF[RqZ{=~- ');
define('AUTH_SALT',        'Zit=p}2L0qA0UsikvFMOQ>f6B=F-ti0h}8^wRus~lplvHHw(k0<ST7F.=>l+ISv*');
define('SECURE_AUTH_SALT', '5WLf7D=C{-#P+!up!xFFrZEGo?_]d?>/np:>PZ>hsn_lRA}b$_WcOX0yc=&EpOsj');
define('LOGGED_IN_SALT',   's`83%4uq?>YdY^x|kKaa{f%JUv.&kR-C*{-TWWh8}-%Go@CB(:tQKAz~u!5(}d5f');
define('NONCE_SALT',       '|ke+Xpg;#X6YwCa|iii,DGBpE8k)!S+&FfK{V}2m;<bc8QE9-]8m2-okdkCvV&o+');

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
