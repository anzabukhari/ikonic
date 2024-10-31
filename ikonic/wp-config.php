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
define( 'DB_NAME', 'ikonic' );

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
define( 'AUTH_KEY',         ')F<8*UF-t.VFweMT^;iPT+3`h$(3`,PbN&03<JB{WCX)wTXd/FH9:|_!CrgNzl.w' );
define( 'SECURE_AUTH_KEY',  'M/KGWI|Os!XuRU().l rox>d[6DJAJlP9L_S,FBIQJipF1bFA El#1]N<Sqw0paq' );
define( 'LOGGED_IN_KEY',    'p.iRj3|af%?5Ed5?BQ)M.DZKGHK`5A%WZ,b&}|OQ2(y,G=DJJzl~@k*O&TkGeMb5' );
define( 'NONCE_KEY',        'i}$4k@&]_mDuu;EvCA]7gyD8#kK_W{1+BxJ^a8(mR}g{iVk7(!#^JE^%1zuOEc[&' );
define( 'AUTH_SALT',        'm(o8+-n-C86(+cp-{filG<~I<^1QsBJ<(]%9 r,S/rW;Jy^pC{gA{*)--jS;ETct' );
define( 'SECURE_AUTH_SALT', '!h?4.3lfya&vd/q}.)b>kLhMK-!nKi>9nJ(7zzbW<)-~kSQwHty?,1D-W}]AG!7{' );
define( 'LOGGED_IN_SALT',   '3dl-MR$]GHT-_J{18JP!p/1Saj~i<n>4d+:BUIZ]MydVC/f]H[ZM$O8F4#iv&xE;' );
define( 'NONCE_SALT',       'cGe(7d2,^]tN5}RH4@)W1DI9jqKYNp|u=h-(+sB~-G^/r55;UWP=;TJ1YPe}9lPU' );

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
