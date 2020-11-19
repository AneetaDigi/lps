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
define( 'DB_NAME', 'new_pls' );

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
define( 'AUTH_KEY',         '*9v8Bw{RCMnbM^pH+AF{DKOhZY@V,97y&p%!-/ztQXp0B(S#qJ4&N~th}vLiO2v*' );
define( 'SECURE_AUTH_KEY',  '910;S0+Z{mKSP@4&eb#UDwe>K!t9`-u}wc8}%E_r:q5-yaAQO+?84!L m#iLmCrs' );
define( 'LOGGED_IN_KEY',    'v~[6r f(|1AyZCwcu(=+_vn.ap@&L>W@_amljAnmS(uR,bJ!-3Q7.zF59t(f.%y ' );
define( 'NONCE_KEY',        '%0P!afR.OHyYXJSGm:;e%[`AOxW*c(DOv>{zq^l*]y_(qO!zz;=?qC,4fo:oH*Pt' );
define( 'AUTH_SALT',        'F.ll(hG>,ptkP=^YYzK;PSQE:iP*yAr0Fh,iFKoWTe(^nJ1hg5r_[/yNAM$RND9c' );
define( 'SECURE_AUTH_SALT', '<5$3.]MQKC.g8xo.o*znIHL3A]}1&/~l:(c5lO(0!:unHok6nP`oTVcN-90>rDMu' );
define( 'LOGGED_IN_SALT',   '4Lcrw%n,Lxm k=f],$d*e)M_jzjipdw?2$D,y:_;x1L,$0T$u%i/kj>jP~1kGhl<' );
define( 'NONCE_SALT',       'q^Af:+yNq0mgdjIMM1:?7VU<<{AWjA?B%?5yMZ~TrZvrxL)6/f-/+6CEX>X<(1H*' );

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
