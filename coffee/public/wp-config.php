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
define( 'DB_NAME', 'coffee' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'MySQL-5.7' );

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
define( 'AUTH_KEY',         '*X52dNjb]8iuAtoTw[pSEJ4/txX(>zOxAvveJzAu_wI1.S8ZMBfh&b@c:ZxCG73s' );
define( 'SECURE_AUTH_KEY',  '`%@Vf+A0&[nlT|RSF~8|(C!OJC0tjLF4O_c-XWB0<hbp.oD p9oP/b%vm{$mV%fS' );
define( 'LOGGED_IN_KEY',    'K8[}bWvgdgGbBC3NLX0eH1~*94z_EY6QIw1o dzi_*lkK&$fdUWnwjTS*w:|QQ^u' );
define( 'NONCE_KEY',        '5`SL[Wii ^j;J:+8X?<o{m@Dh=5ma-GIn&KHuk4O$Y*8cD`mV0wLnH5@t/`4M5&Y' );
define( 'AUTH_SALT',        '>9z cr.1Pv3ls(Q/i.`pMds{nZPHJhx&>;!r,wLQ6|[]a, &dfMQ8&+mmj@X-a2}' );
define( 'SECURE_AUTH_SALT', '0HW1tASn/L?`@QiR^sE!]CRwR@0yOyqgN#diDxSuE-]69)d.`wA3i_)X%V@+M40F' );
define( 'LOGGED_IN_SALT',   '&:u:;re@-R9y-9#Pt-UDA]$|]-``m=8`c]c@v].2AeT0U&|C $gpNYk>I/T;]OFZ' );
define( 'NONCE_SALT',       '0Q=nTm645{xX%JE%(z:(*YS3:*NnKt5i%wZ4MruK!:|_I}&I.DG>}3YFBU/3i7dx' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'co_';

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
