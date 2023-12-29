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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          'Fkg4>Nb^GEkbp3x}~4j9wUKGgD*<MWx./-xt[CSsSJxFEs8NLL8W+.$]G)ud *fZ' );
define( 'SECURE_AUTH_KEY',   '0CbK0pFpk0`u~yN x/*!c}v$w7V!|Dcd(b<_5@U1+8LI.9~m1W#c-fBe8r(w4B0z' );
define( 'LOGGED_IN_KEY',     'HKswDu4VBh~O$/IE<,0tO)wg_UZ<>k%4ATtEMkij|+TtN ~{c%xm4X<w1>9#r+bw' );
define( 'NONCE_KEY',         'w7{w8@Ot CV=oIk[r<]c{N4ctF-mc-D=0E 4s7.4>?vsxy9aS-vX+VIT(j+5lJp-' );
define( 'AUTH_SALT',         'S7)ZqCSf70M coBiY&~9/~0XnH]XA}78@^L+=AKC`Pvh^Ng$I73|fR5^>$(w4?Y$' );
define( 'SECURE_AUTH_SALT',  'yI#xD8`LTJmW=psf3h[gIl&`RVYp[<WS]74:po<| 9ESr7IZ$v&*7w$MJwK09}J)' );
define( 'LOGGED_IN_SALT',    'J(jvSijOE7L :9xFs }%[oF ~I|F9PmKXcW&xvX7%D]izV=rS=iN#LvK-Q:T|XTF' );
define( 'NONCE_SALT',        'hgC4H:Ih0?XWHlOu-~zZ>3U`IP&gS~=E`Emji]H%m2J[;/3~}ua0i^xrN?$o.53I' );
define( 'WP_CACHE_KEY_SALT', 'T%0:K&_#[ZiNHGgC,L@*yU`Gd!SL<H_<axU%?p9tfrkX&Gfr:&2b&ZsvcZ,Y^&iA' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
