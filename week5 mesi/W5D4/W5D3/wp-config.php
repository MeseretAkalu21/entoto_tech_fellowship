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
define( 'DB_NAME', 'W5D3' );

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
define( 'AUTH_KEY',         'lSM*W700 T9K1|j-q+d>RU;0E+job1,x}}>IP^!{KMFW0m%Fkvw<<>j7OW=|aY*&' );
define( 'SECURE_AUTH_KEY',  'kf}?Iue!!1lZN,Mwzl L{I0WVc*j787/0f,alZl7D9q}DO[r2Nrl}l@Z72y8mjj;' );
define( 'LOGGED_IN_KEY',    '},h+Pj,a U4)-$^6oXd*Oi6a6;%5~lM@PyAf_lwF8K]c6#Iy1(g6yCTs1d 4B:_{' );
define( 'NONCE_KEY',        '&RjY5R|eIFgX9~)@H>$ErUlXy |m_}Go~9x6ZtSHC,pM/#TJcM39`KGX?e01~-(>' );
define( 'AUTH_SALT',        'T{$J%~q*K32tbXGMBjx!ev4i(}_ebG]k{p*,OIW2e{{!TzT9EWc:AJ;fY~y35 Q_' );
define( 'SECURE_AUTH_SALT', 'pu;zrQtiWMDKF[Q4j;Vy^f:H0Y!}~9+TsYP1cU+soo SDYT=?#bn:p[()]^1+Uc|' );
define( 'LOGGED_IN_SALT',   'Eh+K.b>{[KZHGdm(./$Y1AVa,[.{h:z7e@eBG9gE1-~ZZg3V#DscG$-M_U`DjO&!' );
define( 'NONCE_SALT',       ']yEt%ch</L^bPuI(88~Eu|$a IDDS0=T2_Q8!&GzNlbbl2~M(qNvwS,lZD#ui0Ul' );

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
