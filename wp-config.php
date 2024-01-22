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
define( 'DB_NAME', 'japcare' );

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
define( 'AUTH_KEY',         ' xpo=.MzQ}AA++bL]wr|);#rTCcsVblG0Wc`#I_:vGh/)3)BK #t~#xX[+jH)Xn;' );
define( 'SECURE_AUTH_KEY',  'U;~LakZ[KnP{@]ACNu_W8a*3<s2*M=nt?nBzO;^m*F3B4$Am5nBGC[##x4G<U:9/' );
define( 'LOGGED_IN_KEY',    '`!b6:P}k0S)kAUj@*Yn/4~:ebfcU!5KDX`HkF%R{JzH1wM4!h {BCgvn.9tq?3YB' );
define( 'NONCE_KEY',        '/1~o$#-?F]{m2lE]@B@GD=&#88gm_I_Dq<tnND3L]S5nO,7~zvvT5gj~,]-0t}Z(' );
define( 'AUTH_SALT',        'VVG9iyjj6lKin$c~:+hDGYh#tzp+Bk4e=Ho:P)3{>;E!9[rqfm, V@+OFc{Hj,e6' );
define( 'SECURE_AUTH_SALT', '{bXBHGM=G31KA95B(^;X|ao>N$=mm{Igy2a^>RLp+1F:xS$]c<G4F6b=G&.jjAxT' );
define( 'LOGGED_IN_SALT',   '9^`]853la)Y+&ZEP|^+([Bkdz{-L.qW/|V#mB}0KB8o!v8&)%?tLP-fXPwV2P|+m' );
define( 'NONCE_SALT',       '3d3xa)>l1=#Boo~C]c9ZjHlUjSzP`J$B6E|)iSVi(S]T0;gy:eN0aPcY&0bM@^-C' );

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
