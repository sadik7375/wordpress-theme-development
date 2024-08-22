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
define( 'DB_NAME', 'wp-theme-dev' );

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
define( 'AUTH_KEY',         '`=su|JtDg`/VtmG}3?C3x4;Zl[p,rZw!=-eE;5o,^h-3=B)/_[2zYs?vWT+{B@ /' );
define( 'SECURE_AUTH_KEY',  'D~+o&Km&ZyYt`[9LJO2N?4tM<%;mg(tEd; W4.p;O!C+e$}diCyYO/+&AXXVqC%S' );
define( 'LOGGED_IN_KEY',    '-g=9r--H=yLtY%/nN`&(P-ou7cMGu+=(`]=k9i7Iv/>tx<XPwcd(*6V!QFcT~qc5' );
define( 'NONCE_KEY',        'v,c*4eSUH(^?kqu8.F[S{Y@3g=!$A9$p/$$}7u(,$=$8*~1L/HQziCH;2o51.GUy' );
define( 'AUTH_SALT',        'qau$Qa<+W@zBY(-XK^f=:VgJrdZ*T1 `O||jP_lBk>}/6v@?_P&`-aU{_%,n{`q%' );
define( 'SECURE_AUTH_SALT', '0L>Z(Iks;[^P;]8rC1KN^yu82P3 J)NGUoZi[b6cv2he0B3>E<mK({j JOEwp;![' );
define( 'LOGGED_IN_SALT',   'ie&Lz%[PBHmCCIYOhfU$&rm3YL@n?R>3_s*9M:J-g0ml=a7.;_ZIlC=>(<Gtgg&k' );
define( 'NONCE_SALT',       '>SfxG{G9x#/vW>U]3Y)hrmY/qs+>w487QULR8=Y@3j3FJTKWB$V1&4(Qo@N&h5]Q' );

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
