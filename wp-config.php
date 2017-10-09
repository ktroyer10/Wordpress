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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '*-Q}wS?^N_vHAGqFg9t=le}+!zy9Uj/h?LBP*fq*4%^/ki}GY0L3)WA#!83q}j7C');
define('SECURE_AUTH_KEY',  '6KA)?G<#vZupZf4%7qt~Y ^+)}SIJN#^-=nRfub`/$lv}>ifBL3Zu-<T_3o Sw{X');
define('LOGGED_IN_KEY',    'r;`x1Oc&BGnN,=K[zf!+#+=b$un9d)~#7Em(A80{orY`%/Fn:kz2q9<4LI,A!G)E');
define('NONCE_KEY',        'n0#=U0^Uy}0u%gQ#|E+WwjtH*~Pc[_TAR2**TXWU;oFw^(Dhks7^@x[lhQ3!<}e6');
define('AUTH_SALT',        'J{8fHAP/9t9eQxD6HtL;lbGXa|L&=aMr34$-Uxvf-vXw&8g}^<? s48~H/n64$7h');
define('SECURE_AUTH_SALT', ']cA(1UV+( 01d|wZf,2vp}1RwW1EwHCWcW4`{s&R/OHm.,Kh2zVS7wkKvVrgmjOG');
define('LOGGED_IN_SALT',   'CxU(~T#|:kZn6;,OEU8E_zQ1nsi2R|B.H0DzRs3 ${&GsbyQ&9qpak-Bztrt_H_e');
define('NONCE_SALT',       'z>#K~-A3})cDkCH[f|E3_d2{`k+3IP_`FjnXAEk,ln#`[EuS>K3qjy! _P;{*C/H');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
