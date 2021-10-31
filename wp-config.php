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
define( 'DB_NAME', 'worldgamesdownload' );

/** MySQL database username */
define( 'DB_USER', 'worldgames' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Ronjoyjeff131977' );

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
define( 'AUTH_KEY',         'Nx<}rbd` l1HgF6d}k8$Xja)IPf s(y%CF8(|v!/S:?}[L#(jIVGQS+UH|(3FPtn' );
define( 'SECURE_AUTH_KEY',  'pHs&Y,)kcCXENi.v`]}9dc+aI@K<Z{$&UOm[R(I5^&4CT<+W@H*}MAiD|)A<~lJn' );
define( 'LOGGED_IN_KEY',    'gl;O/]( Q-r,~e!D/&+uq3)rW>O7YE!.5!4StyWqSRRj{*DgXY+RHr?Y^Hmo<Nta' );
define( 'NONCE_KEY',        '3d 1T9H#,%Y2w1u`0YMFyv ;itU8CNK;P[]^QV+HYkDk$@U6t:y!#@nZ_CDX,{@8' );
define( 'AUTH_SALT',        'T7m6ilA*,1uSY#wef=;>j5@Dgr@//h}Z+U>fdwZ`AG&9g484/+2$yb7+KI<,vF(B' );
define( 'SECURE_AUTH_SALT', '-tekVY>=UX!Kcp^ycvI8zy.0me/&B$sUBO?]J.Ml1T8sw;qjxli~SK;ZPN~W?cj`' );
define( 'LOGGED_IN_SALT',   'v_ho]q6I&6)KuemCGC&/M;CL?KEbPSN4_TF=1f; x=xm$[~UKa]nGTBlpPi1sZY*' );
define( 'NONCE_SALT',       'P7$i7?KfLH+.P5~CQOA(HPRt7!Z:`ot=+WcJX[fa(^vJQQ^[h/k(~Mn,K/xl6VOu' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_wgd';

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
