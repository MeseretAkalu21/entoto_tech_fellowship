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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mesi_enjera' );

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
define( 'AUTH_KEY',         '%anLq#:~-{ [r7}9*[gl1g!~=n4gp_ D$X<[Z0>4x;(Jo/1B.Sn641YumHJ%(3%n' );
define( 'SECURE_AUTH_KEY',  'cBmh0Me!E3j[hmpCi2Lya+2kE?y*A&M[hP06d-jjoXw4>KNQ~KA~y9_Mz[T399R*' );
define( 'LOGGED_IN_KEY',    'Y2+?0nzZJb*0*8rJ5@~P3oc**.!k(ShDKb$mf.q)!H(Z#0x,`_6:x(F*9!1{rG6)' );
define( 'NONCE_KEY',        'B3!+)e+[xyl03`5;a0N<EAfB@:l9D$Tt:B|F,LpLOc01prc:{e&`i#)jHm/!&)Jd' );
define( 'AUTH_SALT',        'y7@UONUuleY-&h4*Ulw&zw*{i{nLHu t@D>2N#(lHUr-`y6h8%ACM4s<J3TpjJ{i' );
define( 'SECURE_AUTH_SALT', '=@?p~&s8j9dbY+ 1G0d=p2UZ%m]5i)#lV!@y$m`S d?fiV%HGG^bFj?>(1LaW,(r' );
define( 'LOGGED_IN_SALT',   'OaveE@r)&<PL|Ux~nRUzd,m~eOven}f4}H>3l0Kx@!9)k6;:+iQX>v[| 4c:z#>M' );
define( 'NONCE_SALT',       ']clo.Q5GK>yZ4RU{h{kV|a;$?&Mg$!>].FR$>/jjE8bHx_5iH*NdJ5TpBU<EX4nU' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
