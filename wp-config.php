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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'webpf' );

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
define( 'AUTH_KEY',         '/8`D/ r9ETeM6iS|kOHA#]I0>@$%ZHd$mxW?6-&L5#hAbVYr,zWnr)BVv ZaQ)DA' );
define( 'SECURE_AUTH_KEY',  '/|.V}>fdh^_R~Lwz U:SX2ccTYB|}QWlpq:-Aj  E&-`]?d:?kEZ<X5eh.[@9cBz' );
define( 'LOGGED_IN_KEY',    '%Zr)wo<r|8bQ[,<sfm*2URn@a9)g9W~:[2b-E*Xog3e^V)HqXjfW%hI7<<3qP?$g' );
define( 'NONCE_KEY',        '[Tq.|{6DcsL28S{!]!r3TjqoEN(jjyeji46lP=V)|7:;GGw/y*TC:6/r=+Bun_|#' );
define( 'AUTH_SALT',        ';hc;i`y=v!B;GzU`g)/R4nwF;~lLHBsz`iDo8fcv$W;[R^6SY{;BYM5B2U/D!LGd' );
define( 'SECURE_AUTH_SALT', 'koEC`_&!s?wgmXNAA9B+9E5-sxP7Ou0ZVmXDdq9k.aH>PA!8YRl6k,gQd:o^XD&b' );
define( 'LOGGED_IN_SALT',   '7_1UdYN,gf0?Xj`Ddo4DNS9@9}^E%>00~CQL]/?fa^`DWH+x{I&90MLqq}c]4;;%' );
define( 'NONCE_SALT',       'M(A7N%2q;!`Vm90E;8vB5A>)CWa/Xw84*ty|L7&QsedbSi+}Wfp]FfUbp>82l0UQ' );

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
