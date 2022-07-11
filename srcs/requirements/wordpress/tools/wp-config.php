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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'sstyr' );

/** MySQL database password */
define( 'DB_PASSWORD', '123123' );

/** MySQL hostname */
define( 'DB_HOST', 'mariadb' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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

define('AUTH_KEY',         '8sZhv=nl&-%#I`rHV-63yFK>btLgkfKM}hvyk!@qdZA7@.aCu iz^%wS{G:qOS*A');
define('SECURE_AUTH_KEY',  '>4IB9j_rQu2g1F[0)N?a#g7+T+|p,afV)|t@<^AfldN=BuJK^B`jC=ARnTA)d<p!');
define('LOGGED_IN_KEY',    'm~[-h*oFUB; 8,u- 9wWZ{T]g8i5LVR 9&|)bDHHt<Z7>^1|y{|nuIiBudHb8SY1');
define('NONCE_KEY',        ')Dy&uG+qnK:DGIoR9~-wNZ.wfB1Nl-E_t&+w.0v!{y(k#~W*n~Q#<=YiAyz`-Cd`');
define('AUTH_SALT',        'Z;X0E,:c+k;R{AIyVu33JAj<`J&Wv+$-9}-]4fTb<&(Vq%X&/8wlg;iIsa3Nl-2&');
define('SECURE_AUTH_SALT', '0?vq>otDTSR$q$~=sD]zuUfL[,j,^<x-FD7whI/|i-CQ!m<lVqC^nm.pQ_3+WOEM');
define('LOGGED_IN_SALT',   'd.QQeIe?-$TPVrcAgS_*Lk$2K;|mDxNl`#i:/6|g&v,k&wn8AR*R9<at,^7x[+T8');
define('NONCE_SALT',       '%~#+uoZk&v_yZTp^~VO{m/-$l>MA.V=R9+n5VTrqV0gPh9X~fB6R*!.zsEi6K+YY');

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
