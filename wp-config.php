<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'pernikahandb' );

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
define( 'AUTH_KEY',         'W/-=n`.#mV{8NfkqnfSpe66w2hXLz`0i;_WC`7PJ0q@leZWaA.=@2,;`FcaI1#%o' );
define( 'SECURE_AUTH_KEY',  'ztHPJN%8T`ZQ*mds6Y37Khv(u{SZ<kQjY`YT<kwN- jMnJqyd:dY-=H@-NxZKY/-' );
define( 'LOGGED_IN_KEY',    'Hs)g1MK^C5@[]=M`~6`9,~2p;+%G6gvNvR.[L,JgP,o:l}Cyi>SrIB)O_n+uMdVY' );
define( 'NONCE_KEY',        'rb^d>d.|3j{lG!*5k/-eQH&d(xRMaqBUa5:%:a <%` +C+i`*y>z=Vf`SH,%(e(v' );
define( 'AUTH_SALT',        'lNZn} 3LVw!;EXe^2ThFba:.,<%0g;zfa,zk>=l}wQZQ60S}:RWu>H<<}L.Z9tsO' );
define( 'SECURE_AUTH_SALT', 'DyY|[PG;!0A2CsU!%S!Is3eqHc610&#(tX!cNHR+&8/%>8}a=UB8xEmx17Q@dkn7' );
define( 'LOGGED_IN_SALT',   'k:Er[KbkQZDHr,I8tB45P~{YXp&Rd}vl!i{D&7IjL65Uy2$6#u2$1lygaPHE9Pbv' );
define( 'NONCE_SALT',       '5cuzH9+A&66`3;T6%o&p(at/AfVOI/>EHs+143-QkZK1PV9%{{ZZM7m_if*dQl{A' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
