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
define( 'DB_NAME', 'bowadminrapthurz' );

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
define( 'AUTH_KEY',         'j~;cu.Ru;~`50C_jps1bd[rRyup={@>5%/9c7#1eKqHknc!|N}j&53&{*X62FcRq' );
define( 'SECURE_AUTH_KEY',  '~`^=`4j@qM`Pwx7r4brd`rnVnEA>~HGYN;em*5owj:t4jaZ-<=,)7@Gj;m47!t|5' );
define( 'LOGGED_IN_KEY',    'It!;Yl38!CWQ1_es&E5]dv5R!{K0ymWq97(Q5g1ZKh#42 fOlUmgUAGX mMY7;@{' );
define( 'NONCE_KEY',        'N,a?N7Hj8Yzx8vw|~T]~SW-wrT>:]aJ|NP^EJ[:wh.,=DB-;g7,PS]>tq*u81We,' );
define( 'AUTH_SALT',        'WMht@4T31=M>CC=rP[m}N82pXW?2Y0cx!ZLEtK8yKV90072mDay#y<G[j VALk}#' );
define( 'SECURE_AUTH_SALT', 'E)s0:}J&oe3`VX?{sCb*N%d7IKJnPKN+*h]$Yo0Cv6ZLX+OPSI}pHv:e`z<-aFKW' );
define( 'LOGGED_IN_SALT',   '=bv(k*g0TD{Ab/_@C!;r*gTwkmfioFHR-tj:)1Jj<{,d!*JhWY#VAz=Hb?%8#[d+' );
define( 'NONCE_SALT',       'eXhpiJ6F`t+&<FI^+r)X`q[N8]:Rbc`aAA!(o~Kv=KER_n`DpD1y1/UdeuCVhFA]' );

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
