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
define( 'DB_NAME', 'fresco' );

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
define( 'AUTH_KEY',         '5)R1Ps/WHBrDI{41N:1q<o)=[!loABlQ10x$}ml2f+B2ut$loX+qXy8BDU;o<]xp' );
define( 'SECURE_AUTH_KEY',  'XB@|}c{R,Y_-|5(UtsE6dt~LY+r&<#|S7tD{k&A.En.yj4b9jG{;+m~VE1Y,G^c;' );
define( 'LOGGED_IN_KEY',    ')u~ isO)3D|>ZPED.-NG&Ob4gu<w}_G3`o?EPY%PUbrevNaeo>)|h=V)iH-_z&qM' );
define( 'NONCE_KEY',        'ejklt[y.F-Cq%({?A.Q]?jGs1&?f+!$JUPKI-;LL.d$niTxY@aZ|>D=S1/7|un8y' );
define( 'AUTH_SALT',        'g37`]4w0%R1af[KshW7[)<7cABA!js(x7EO}A%JgGTa}kP,8w]aIhqBqbqSSk!jj' );
define( 'SECURE_AUTH_SALT', 'JDYvT7IsxF-:gM7K|tL#c%^i4ty_p)C(M_E^IQuG|`Ka;Kf)n(@<J&4tw.rY(ON6' );
define( 'LOGGED_IN_SALT',   '|aLb-.Hlq&ML10eC*jo0>^oNt]G:q7Pv8+_B%/_eRJ_mrTJ5qM:hlU`c}9J8<Ck_' );
define( 'NONCE_SALT',       's9>t2`EO}s,Efk?V<x`W]5P9VJ*2[eF-hJSY-WS%(H$Rswv!&(clHDFe%t.uSh-c' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'fr_';

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
