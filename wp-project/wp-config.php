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
define( 'DB_NAME', 'wp-project' );

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
define( 'AUTH_KEY',         'lpaYtFT KnwGn&eqP{zSc,fR`nEemn54Bzcx(> aP-z[B{*LgzH@HhQJBo^Y ?@d' );
define( 'SECURE_AUTH_KEY',  'r/7_0y*U@4 2Rgg>pu-Gc`WvToTW*+;5lCtPH;,PT&.yd4K-<U%jBF)rJb[4la$5' );
define( 'LOGGED_IN_KEY',    'v]aO5-n5<:HR{z@ACpf~Mhcb]-%>*!NZY*{cickMwDIEBy|F/-D<`2I622hK|3GO' );
define( 'NONCE_KEY',        ' zrf=F!4>8,e_%L2fMI=90(nCSw`)K704{{Xc`GU*da)+bO;MF,M}eB{Ef4gXT:k' );
define( 'AUTH_SALT',        'J!7 `@XsuP$ZzmC)yuzH;p SoH{af{|8y4N^Oc_e!Du9V6g#pr8Jf_bGz2*`Fh{G' );
define( 'SECURE_AUTH_SALT', '@GI/Ve!4VqF8j!a@V?#ue#[4TU@)&lR!`5,#{&kS.pxvtxLf >ofxBeOy#meMy]Y' );
define( 'LOGGED_IN_SALT',   '#sNv^finM~}NRp=]6~USemXJUs%k@gHG}jK)S@zBrFp/&l8,QC8H?A}gevG|r,{N' );
define( 'NONCE_SALT',       'ThSq&puDEWe_UY1K.T>C$krQV/r2vIk78(xf[Xm[H~mC(-o@tq-AKv;ifa.(7.<G' );

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
