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
define( 'DB_NAME', 'autos' );

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
define( 'AUTH_KEY',         ':xXynDX_K|)1}*o]-KW1@8ybFlXv54L~,Atz5MUhH(@Xh{vW``(xvpq2>Ue+D3pP' );
define( 'SECURE_AUTH_KEY',  '[5%Q+K.td^Tx6Nsz->J,_)`$cCt`ce+$e2ZVZ+51ITEoS&7I?bx81rYTr?2@:dhc' );
define( 'LOGGED_IN_KEY',    'xMFG<y5%[e:~(#%w`sdp6-tbm=ruqzy8:0;5TPWog*Q,_Z2pbD979^v_$?OS1itH' );
define( 'NONCE_KEY',        'W}R?0Fx55rox<G$>8[/:%$#5Ol!cyw KJBD6.4e~IS5zD<y/gJxtd&Q$h6/i8IzH' );
define( 'AUTH_SALT',        'a9y2ryzHNfWPG1A,z*VFzr9R-T!{ Hs6rG`@cypI?T(1k*LsC`)C`>|L(N??CAG^' );
define( 'SECURE_AUTH_SALT', '_wk5]Xyi+mUM]U=}$jUTitl>?c<66e]#cQQ=~:ipjE+%#5 aFT@?V_v8ctO^{=uE' );
define( 'LOGGED_IN_SALT',   'X3=z=95)C5)Zb#ZlLIA~xN@To>gy1__ggTq.Zp3$TK8^aNcV7&!ii!mo.jpcy5UE' );
define( 'NONCE_SALT',       '++se0M5Cd{oEl90MS8g!qlBG`zXVjMX?W+}l:}|_aPiNTJ1)`e}Dq-FukCGo)7_6' );

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
