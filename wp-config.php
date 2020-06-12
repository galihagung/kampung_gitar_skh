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
define( 'DB_NAME', 'kampung_gitar' );

/** MySQL database username */
define( 'DB_USER', 'rully' );

/** MySQL database password */
define( 'DB_PASSWORD', 'dOzpVEr7DLCsga8w' );

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
define( 'AUTH_KEY',         'A-kdHsvfi{zbsV&kMkZ+.ABii>5Ed5hF6#m830=]JckoP .uq#q`:D3Ge!@X~OuN' );
define( 'SECURE_AUTH_KEY',  'O9Z14Wj(0Q_+}Yn4~*ccaHQ<]]c`x=i.mBpWH:*&O7.DB)nGp`^lYySBmq}T om6' );
define( 'LOGGED_IN_KEY',    '15q+fhz7e&3Ub,|}NaC$Pz(y1,@?rdE:nx}GuPa-TIacZTU30a5wSzVSJDAFf P|' );
define( 'NONCE_KEY',        '] }[/]KCHN}Kh?fi(}r@YEAQ7_WiM<pzC3=@8?17:F4/#8tv3d`%l:oE-8a5SZ/<' );
define( 'AUTH_SALT',        '0|a]kSQ#{aY4azDAQ5U_96p6f;IczOx->JG=Ru|Ul~cFa98O8uHumGG4>I:dhG!n' );
define( 'SECURE_AUTH_SALT', '*HKL|%7KT&PI&`Fe48hC/xqvA?PY~dPe.DrP6;l>qvS6u9m`-*@6db<?q&y*P{!!' );
define( 'LOGGED_IN_SALT',   'b?#JeMVdb-~L CG7?~tJCHk3>R}3cOx|E!xoxs-I^rp{P:w!{NQVP%?@NDIyE&IB' );
define( 'NONCE_SALT',       'p`dACEU98v3U(&qQ,w*md}RZ,rZPmj%a^(c{!9cXtH%Gi:Ckm/JKam3mn<b5@,#2' );

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
