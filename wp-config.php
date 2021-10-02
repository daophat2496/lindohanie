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
define( 'DB_NAME', 'lindohanie' );

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
define( 'AUTH_KEY',         '@#0L^0/uw&|3|An%KE*wllJJ4[K6iGgS&Mf5*pnq>AY+=2+aPV}_S_X$]&}X&9nl' );
define( 'SECURE_AUTH_KEY',  'B|/0u7FV[imvWK}o?i&{p^WSZ7?D>ObP<-dW|y;#t!Hm@V!GUWL82.C)pP|n&r[t' );
define( 'LOGGED_IN_KEY',    '*kJVfv``H+5V(^xS{<5W4w*tw@e1h!p]7Zt.}5ZvOot|J:<?[`Cu/t-~.3h1W rc' );
define( 'NONCE_KEY',        'AG~~=Qg#]PS(ixK=MKkKS|#b5k&bl;P7i4/fvK!_P`}jQoHd5q6#q!TfdQQ`m//`' );
define( 'AUTH_SALT',        '1)7~HE{V6qMc,Yyt?I2)GkrL5X7vFp?)q|K-w]ogJ&;=?0|B^<_Xw<R#o^+Wgn(%' );
define( 'SECURE_AUTH_SALT', 'DgHx0z(+$~nh]SlbH !@Ly=_AD}cx^EA.i4</{ ^b3#$*BLJErjJ*9p=K);[Z.iS' );
define( 'LOGGED_IN_SALT',   'gu)zX.Q+Cq~m(X?f[n[dp7<qrq~|mCh]kUht1E(7(~BqR.~jiVao wyWkCTv:B8B' );
define( 'NONCE_SALT',       'qz;#0KHDw&`i,io&|}{7|jY;YLUr+ik(a^D&,).&J<X[Jn0siezJoBp4`;l?/ezz' );

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
