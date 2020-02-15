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
define( 'DB_NAME', 'restaurant_db' );

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
define( 'AUTH_KEY',         '_S/!Zq3p@!MO+VD$)v6*jtvHk1/4c(OX?7`)CxHTYG,$Cw9PlJZ5=B}k+NihS/L.' );
define( 'SECURE_AUTH_KEY',  'R/b=TU?e -EwDWnUjwH^>0qIBNPKN{MUerI9{t7M;N@bTgRlbmN/3]ms?--y>ddU' );
define( 'LOGGED_IN_KEY',    'm6-ES.q8HCNUF_AA;cFO_9?=_4b,8B x1=AsrM;:;crl}(d{>viE/~s_%x1[GvQ_' );
define( 'NONCE_KEY',        'lUjv}J> z6=]dhYduR2VTD[}`7Pu~vyIi,ow/~(hf+Vs9Z) HbCnGmxa^O=Af?6?' );
define( 'AUTH_SALT',        '8gsYsu(+,$*]8W/trGHNQs5;g1E>_it2o;~uGtEUS1YAvhi*gnYJvEp*%o)=QH67' );
define( 'SECURE_AUTH_SALT', '! xC)t)Pgy2gX+K]-qP;+(1_],h*%W}wZ8tWvdg5 JIbL4]|G5US:qnhIQ4p-s{e' );
define( 'LOGGED_IN_SALT',   'd~yOZ{MMtT];1KRw{7SkJV>0v:d[E;>jy~fa.p<@#HwFK,^/?(LRpBS>pmFT.?c2' );
define( 'NONCE_SALT',       '_%h p&B:8mA@;6`BfyP/L^Vc8)HT~E$+OGu4Y-H`Zx{sfNbuAGcI}}N2:+p|W-yS' );

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
