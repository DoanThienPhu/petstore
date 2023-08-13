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
define( 'AUTH_KEY',         'X_xmB(TuY~,3>8vHD%V%!<.+Dbr[M=IDi=z`;G(opfQzps[uKXyfq5yD:Mi-oY2x' );
define( 'SECURE_AUTH_KEY',  'yhBzka:~U`e2d_(i[Lxl2(CP|YT(+:&9}+|Nwpiwa2T#WgGA0TlvOC9 ZsHvC05z' );
define( 'LOGGED_IN_KEY',    'J{d%m,w[F,4<),UIs,u>kh?0 qx]Sh5yjzF@&%f8w_PU?)!u5wnhR}RJ5831(;>k' );
define( 'NONCE_KEY',        'K@U-`/CTjhT84T39J@5UTO<UOvl?+>lZ `T#dot.s#nqxLk|RSA$R-#Z0h@:y/NT' );
define( 'AUTH_SALT',        '+y6g:a1x d8:s:]RE``J_[C_b_3wm:+?J2|^:NVs#lGW=zRSbM}?Aj?V84r SoPk' );
define( 'SECURE_AUTH_SALT', ')h5YIOh TIw})J?#fMtwp|V]eI=Nr_S!bwf<4`9=ho!2d|C87s~#1#STv>1I}2Ng' );
define( 'LOGGED_IN_SALT',   ']$t.=$[/d]z:y/UZSClz)v35tWsX`o2%%Wo*JX*^_+mc}tGz/HzRQPDC1o%BM4{[' );
define( 'NONCE_SALT',       '<jBw&|@^hpSNxK1G`fIt->4QG~<OA}6cxO8c,ieIdR^_q3z13(3o$&5>2?3.Yz4|' );

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
