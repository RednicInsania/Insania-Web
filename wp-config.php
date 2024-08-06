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
define( 'DB_NAME', 'insania_database' );

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
define( 'AUTH_KEY',         'Z4)}<Ol8nkSaXi/4rvyg=t|)4ZZJu#E=-.^;oRtr#(Oa%.a8.X$%H+BZ(z{Z$_MD' );
define( 'SECURE_AUTH_KEY',  'Dy8C!M%DQ<1n>$il3W|f]IDuY${<6wVXnad<>PhW]oK3N*wj/V5!Og}<.nQ~*<Xo' );
define( 'LOGGED_IN_KEY',    'X?aE)E,=5m;@52kQ@$3<!2VlBqCrA!LE!lD/YjY<L*!u(2{hZG|}8k#q4+n0Gz4(' );
define( 'NONCE_KEY',        'Uv/2v.&HVwLl,mT^Y/NJ+67Px2{`*h#xqeSAyA[A9c~}[P5;p>UqkiX;Nfg0QBF|' );
define( 'AUTH_SALT',        ':#Fkul.v*$<+J: Nn0<I[h<[P=dt`.dNoB]NU-YP.2-0wYxTHLVQNW>dP[?a.rEw' );
define( 'SECURE_AUTH_SALT', '$GLzn}>TljhQ&]mEY;ZY.{P.u>0PAZ!lJ;8qtr!lDX1!`x:^gsl7.sH;;D43Rjv.' );
define( 'LOGGED_IN_SALT',   'mT5`xaT)!:hF;vzY9H@D[Vl>A 0-]5^l)|.;eWx}$DNXBSoc6;@bJ<UF~_j26u&5' );
define( 'NONCE_SALT',       '4sO?1U(U6G)p*K!qyi[_}ZM/>s,#(O*=d_OUzV2jtdlZ(E~8KeT/)aA%cA!a riw' );

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
