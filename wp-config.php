<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'wordpress1' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ka}6FEB0@QXrK@SZ5Pagxz0vezA+ x@H,-qXbym}eciz@ #>fd2u)(x<z-dW  5n' );
define( 'SECURE_AUTH_KEY',  'dTM#b d9T>Ol.]oVnTm+qbAMt%%,U]eu,bAyS2oYrcjuP;vB99LQ,E8%[d_G3{Uq' );
define( 'LOGGED_IN_KEY',    '^as3bIhAU,}/kTC~666gqw;bH]PU>;L#/d8/h]2k^_2DQneb#+PY_Ceyr:m9>^Ll' );
define( 'NONCE_KEY',        '@DYGd|,N2IuEe1mtwGL @ou3fLN[OG|DgnC4.GYM_TGs63y5./H{)?51ofae|6~}' );
define( 'AUTH_SALT',        '1z[_tT:Db#!BW]]tUVP~&#1K%jazBRHA_3W]ZlUyT5U&yv5q,70o*%cADc}..u=r' );
define( 'SECURE_AUTH_SALT', 'H!EI22T.m!f`+&>ZXD;c9$B}@48?*fX;aq(pQMh1~YEI gwLBFZ%lkz:>Nft8]9?' );
define( 'LOGGED_IN_SALT',   'o_ Wluqtghsx<&) A|D*yfs6${qd1`f*[o)-UpzuoI2r:}=}S>FxR[N$u8H Q/ix' );
define( 'NONCE_SALT',       '>u;{MK*v6ejCCWhxZ+Jx*SM&,*awyQ&c4D(eR9Zt@3X{CiSF%6~1B{$ujqcnBXTb' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
