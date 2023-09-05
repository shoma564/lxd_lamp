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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'hb-user' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         'bC?f$,,cMAmx}/Leo]hZ|S0du}(M~2j7wt1nL:A4U{9g=TOX7T*A-7>vW0!?ob]%' );
define( 'SECURE_AUTH_KEY',  '?s`^^CuR;hvclJ9YJbh&}rk.p3.R*u/2ZN.5?TR U%{e3k^)/tWEktY[$-wtIe-V' );
define( 'LOGGED_IN_KEY',    'G`{^b(.h7{Ys9MJr+eJu(nIwa:JD`9)[NvzjK-Vfpz1JS*QJJ_HLNQ)Kx3bS[s0V' );
define( 'NONCE_KEY',        'ksbKhTu~{d+kCLj~Op!02v6_ld#{?vV973v[]Key`sq3nMX1bU I8 (oG3VE$EXF' );
define( 'AUTH_SALT',        '+`KEM)1a}D{TnO)u-iNp[TYLHGXY@}o~yTbnf)zH*+@3kADvJ+I[OYv?7>}7|p`U' );
define( 'SECURE_AUTH_SALT', '^$wRK,si%#f%N8XTD59^L&wa}#LWM(|@?{1Dl81M.^rW5k[P`HI#M^uF>icJ<$1%' );
define( 'LOGGED_IN_SALT',   'IwE%V?!.X<rQtFx+Brr-lgm]zIfj4&TE+Dzny0},Q,?T_<k[P<W- N&W~%?`8 c>' );
define( 'NONCE_SALT',       'a2[eL<sv.N{!sDC@C]R2DGA|kgYV7[$t1(4Ue{_X+Y`=:gG1c#FjX(bog`t!wQ3{' );

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
