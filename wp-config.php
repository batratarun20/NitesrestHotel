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
define( 'DB_NAME', 'Niterest' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '~ `&kc% X*c+GhO#5RESiA0OYKTE ~%W.Ed^dl{Qa%]y>?aG|xh@6aNjnf,oM0cP' );
define( 'SECURE_AUTH_KEY',  'Q#iADs+lMwMq,VHbA;/ZMRkO2em_)/&b=8tX2-j7m9JzFrCE*o*YUh1FKMurYKZP' );
define( 'LOGGED_IN_KEY',    '{WVWUV^i3zoqLZoVbX6h^_>~W7|<7b8GxR#q~.pO`0&OvbR88[L 1/_JsN|/X]>_' );
define( 'NONCE_KEY',        '04:X$|@gd#&pUvBHAFwf*}m`+H,SR-YL?GZ46.T;1lOPCqyM;zEEnQwihoWUW~zF' );
define( 'AUTH_SALT',        'Kp-%s`*{$i{}2U!g$;q:Q<wLSH_#Pq&~jCH;?U=I&poLoSqY6kV8|qALNXqJ6ce ' );
define( 'SECURE_AUTH_SALT', '$N0&>V$bk7pN~RO/B||n3tTkWYP3VAGHQlUpHL9(85tdi,/;$~sQuPz=.M2Nz$s9' );
define( 'LOGGED_IN_SALT',   '@t yLdU5_G3nQQ5yvunkA0/^i~nneBv5Q/7{=qK!Rs!6E)%&e1b:`o$ya>e0}yZ]' );
define( 'NONCE_SALT',       'kL_3~9mwC7rs5E=y-4OSwET0*+3/dP()w<Xr3e-QiSh7cKFJ(=8e5yWP01B5Vyh*' );

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
