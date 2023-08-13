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
define( 'DB_NAME', 'ecommerce' );

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
define( 'AUTH_KEY',         '&@gSS[ fHw3h@4{JCj<#9$R>B2,Pohrz_s#Y1}fCHi7Fy~(2cb0)>ZLKR82{,=D7' );
define( 'SECURE_AUTH_KEY',  '5B)6qFA<6UwnEy7gS~%h{]IhID+*ZZ$ALsGO_Gx>!VN!ewNtdp2^~_<*UI]i~Zpi' );
define( 'LOGGED_IN_KEY',    'VLk%2,$WDBo}AOT!usmA6v9:))E*B_at:Vue-Ou:H5H`1Nd69s0I$xJGN&1C6vy{' );
define( 'NONCE_KEY',        'UV*lB/0Y#}?@NN}f4]=Qi!$[hG&#KaR1b=w^9d,+D5Tyc*i$+%!}a5$o&?w(3%8K' );
define( 'AUTH_SALT',        'f!`nyV qC]~(t2d@GRgb~BgbWnLQC3(U=3cY]ZSlbpnx>L~fen}8T:`4(8id.R$R' );
define( 'SECURE_AUTH_SALT', 'FLq-:y|b5@^vU=zLsf;!`GCeOtXXXc>6h30jE-|R`Hj/:4Us0Ajxc~HAbaA9 @QF' );
define( 'LOGGED_IN_SALT',   'POEH$/kl>:)=SWY:*<fv%&WS88u$ Pl!-3!rpU{F@xj|0=v%(yWWE[(PdGZ7sc9O' );
define( 'NONCE_SALT',       '!P_/=[%G2 %L8tNpk=MmV7jBH.4.51Y^8t#[s7XRsx[7=hERHVN<`_r-#R=mnjP|' );

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
